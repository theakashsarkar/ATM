<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageAccountController extends Controller
{
    public int $balance = 20000;

    public function index()
    {
        return view('ManageAccount.ManageAccount');
    }

    public function withDrawMoney(Request $request): string
    {
        if ($request->amount >= $this->balance)
        {
            return 'sufficient balance';
        }
        $this->balance = $this->balance - $request->amount;
        return 'Successfully WithDraw';
    }

    public function CheckBalance(): int
    {
        return $this->balance ;
    }
}
