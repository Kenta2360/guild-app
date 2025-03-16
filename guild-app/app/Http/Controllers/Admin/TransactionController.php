<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Project;
use App\Models\Transaction;
use App\Models\Admin;


class TransactionController extends Controller
{   
    public function getAllTransactions(){
        $adminId = User::where('role_id', 1)->value('id');

        // Adminデータ取得
        $admin = Admin::where('user_id', $adminId)->first();
    

        // 関連するプロジェクトと取引情報を取得
        $projects = Project::withTrashed()
            ->with([
                'company.user',
                // 'application.freelancer.user',

                'transactions.payee' => function ($query)  {
                    $query->orderBy('created_at', 'asc');
                }
            ])
        ->has('transactions')
        ->orderBy('id', 'asc')
        ->paginate(4);

        // 各プロジェクトに紐づく取引から role_id=3 の payee を取得
        foreach ($projects as $project) {
            $project->freelancerPayee = $project->transactions
                ->map(fn($transaction) => $transaction->payee) // 直接 `payee` を取得
                ->filter(fn($payee) => optional($payee)->role_id === 3) // role_id=3 のみ
                ->first(); // 最初のフリーランサーを取得（複数いた場合）
        }

        // ビューにデータを渡す
        return view('admins.transaction', [
            'projects' => $projects,
            'adminId' => $adminId,
            'balance' => $admin->balance ?? 0,
            'totalFeeRevenue' => $admin->total_fee_revenue ?? 0,
            'escrowBalance' => $admin->escrow_balance ?? 0
        ]);
            
    }       
}