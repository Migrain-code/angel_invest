<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\UserToken;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.payment.index');
    }

    public function create(Request $request)
    {
        $paymentId = $request->paymentId;
        $payment = Payment::find($paymentId);
        $payment->status = 2;
        if ($payment->save()){
            return to_route('admin.payment.index')->with('response', [
                'status' => 'success',
                'message' => 'Ödeme İptal Edildi'
            ]);
        }
    }
    public function show(Payment $payment)
    {
        $payment->status = 1;
        if ($payment->save()){
            $payment->user->addToken($payment);

            return to_route('admin.payment.index')->with('response', [
                'status' => 'success',
                'message' => 'Ödeme Onaylandı. Token Kullanıcı Hesabına Eklendi'
            ]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('admin.payment.edit.index', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'token' => 'required|numeric'
        ]);
        $payment->token = $request->token;
        $payment->currency = $request->currency;
        $payment->wallet_id = $request->wallet_id;
        $payment->system_wallet_id = $request->system_wallet_id;
        if ($payment->save()){
            return to_route('admin.payment.index')->with('response', [
                'status' => 'success',
                'message' => 'Ödeme Güncellendi'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {

    }

    public function datatable()
    {
        $parts = Payment::latest();

        return DataTables::of($parts)
            ->editColumn('id', function ($q) {
                return createCheckbox($q->id, 'Payment', 'Ödeme');
            })
            ->editColumn('user_id', function ($q) {
                return $q->user->name;
            })
            ->editColumn('status', function ($q) {
                return $q->status('html');
            })
            ->editColumn('currency', function ($q) {
                return $q->currency. "$";
            })
            ->editColumn('created_at', function ($q) {
                return $q->created_at->format('d.m.Y H:i:s');
            })
            ->addColumn('action', function ($q) {
                $html = "";
                $html .= create_edit_button(route('admin.payment.edit', $q->id));
                $html .= html()->a(route('admin.payment.show', $q->id), html()->i('')->class('fa fa-check'))->class('btn btn-success btn-sm me-1 ');
                $html .= html()->a(route('admin.payment.create', ['paymentId' => $q->id]),
                    html()->i('')->class('fa fa-x'))
                    ->class('btn btn-danger btn-sm me-1');
                //$html .= create_delete_button('ContactRequest', $q->id, 'Ödeme', 'Ödeme Kaydını Silmek İstediğinize Eminmisiniz?');
                return $html;
            })
            ->rawColumns(['id', 'action', 'status'])
            ->make(true);
    }
}
