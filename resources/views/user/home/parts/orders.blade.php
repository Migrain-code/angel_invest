<div class="col-12">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="mb-0 text-black fs-20">{{__('Toplam Siparişler')}}</h4>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table text-center bg-warning-hover tr-rounded">
                    <thead>
                    <tr>
                        <th class="text-left">{{__('ID')}}</th>
                        <th class="text-left">{{__('Cüzdan')}}</th>
                        <th class="text-center">{{__('Ödeme Tarihi')}}</th>
                        <th class="text-center">{{__('Tutar')}}</th>
                        <th class="text-center">{{__('Token')}}</th>
                        <th class="text-right">{{__('Durum')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td class="text-left">#{{$payment->id}}</td>
                            <td class="text-left"><i class="fa fa-credit-card"></i>
                                {{$payment->wallet_id}}</td>
                            <td>{{$payment->created_at->translatedFormat('d F Y')}}</td>
                            <td>{{$payment->currency}}</td>
                            <td>{{$payment->token}}</td>
                            <td><span class="badge badge-{{$payment->status('class')}}">{{$payment->status('text')}}</span></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer border-0 pt-0 text-center">
            <a href="coin-details.html" class="btn-link">Show more <i
                    class="fa fa-caret-right ml-2 scale-2"></i></a>
        </div>
    </div>
</div>
