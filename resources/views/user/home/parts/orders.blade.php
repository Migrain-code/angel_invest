<div class="col-lg-6">
    <section class="box has-border-left-3">
        <header class="panel_header">
            <h2 class="title pull-left">{{__('Toplam Siparişler')}}</h2>
            <div class="actions panel_actions pull-right">
                <a class="box_toggle fa fa-chevron-down"></a>
                <a class="box_close fa fa-times"></a>
            </div>
        </header>
        <div class="content-body">
            <div class="row">
                <div class="col-xs-12">

                    <div class="table-responsive" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>{{__('Cüzdan')}}</th>
                                <th data-priority="1">{{__('Ödeme Tarihi')}}</th>
                                <th data-priority="3">{{__('Durum')}}</th>
                            </thead>
                            <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td><i class="fa fa-dot-circle-o {{$payment->status('class')}}"></i>
                                        {{\Illuminate\Support\Str::limit($payment->wallet_id, 25)}}</td>
                                    <td>{{$payment->created_at->translatedFormat('d F Y')}}</td>
                                    <td><span class="status-{{$payment->status('class')}}">{{$payment->status('text')}}</span></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
