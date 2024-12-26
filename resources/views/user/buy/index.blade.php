@extends('user.layouts.master')
@section('title', 'Satın Al')
@section('styles')
@endsection
@section('content')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Buy ANGELX</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>


        </div>
    </div>
    @include('user.home.parts.summary-box')

    <div class="clearfix"></div>

    <div class="col-lg-6">
        <section class="box has-border-left-3">
            <header class="panel_header">
                <h2 class="title pull-left">{{__('Angelx Satın Al')}}</h2>
                <div class="actions panel_actions pull-right">
                    <a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form method="post" action="{{route('user.panel.buy.token')}}" class="transfer-wraper">
                            @csrf
                            <div class="form-group no-mb">
                                <div class="input-group mb-10">
                                    <span class="input-group-addon" id="network">$</span>

                                    <div class="input-group-btn" style="width:100%">
                                        <select type="text" name="system_wallet_address" class="form-control">
                                            <option selected>BNB (BEB20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                            <option value="BNB (BEB20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB">BNB (BEB20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                            <option value="USDT (TRC20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB">USDT (TRC20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                            <option value="ETH (ERC20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB">ETH (ERC20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                            <option value="USDT (BEB20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB">USDT (BEB20) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                            <option value="SOL (SOLANA) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB">SOL (SOLANA) 0x67d8bE5242a822adA9Ea280C608198E1D1d0eCEB</option>
                                        </select>

                                    </div>

                                </div>

                                <label class="form-label">{{__('Cüzdan Adresiniz')}}</label>
                                <span class="desc"></span>

                                <div class="input-group mb-10">
                                            <span class="input-group-addon">
                                                <span class="arrow"></span>
                                                <img src="/user/assets/icons/wallet-o.png" alt="icon">
                                            </span>
                                    <input type="text" id="walletAddress" name="user_wallet_address" class="form-control"  readonly placeholder="OxsD12F32xvW3deG5...">
                                </div>
                                <label class="form-label">{{__('Tx ID')}}</label>
                                <span class="desc"></span>

                                <div class="input-group mb-10">
                                            <span class="input-group-addon">
                                                <span class="arrow"></span>
                                                <img src="/user/assets/icons/wallet-o.png" alt="icon">
                                            </span>
                                    <input type="text" name="tx_id" class="form-control" placeholder="...">
                                </div>

                                <div class="col-lg-5 no-pl">

                                    <label class="form-label">{{__('Tutar')}}</label>
                                    <div class="input-group">
                                        <input type="text" name="amount" class="form-control" id="dollarPriceInput" placeholder="150"
                                               aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon1">USD</span>
                                    </div>
                                </div>
                                <div class="col-lg-2" style="height: 95px;
    display: flex
;
    justify-content: center;
    align-items: center;">
                                    <label class="form-label"></label>
                                    <div class="exchange-img-wrapper">
                                        <img src="/user/assets/icons/exchange-arrows.png" class="mt-5 center-block"
                                             style="width:25px" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-5 no-pr">

                                    <label class="form-label">{{__('Toplam Token')}}</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cryptoPriceInput" placeholder="Equivalent amount"
                                               aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon2">ANGELX</span>
                                    </div>
                                </div>

                                <button type="submit"
                                        class="btn btn-primary btn-lg mt-20 "
                                        style="width:100%">{{__('Angelx Satın Al')}}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    @include('user.home.parts.orders')


    <div class="clearfix"></div>
@endsection
@section('scripts')

    <script>
        $('#dollarPriceInput').on('input', function () {
            let oneTokenPrice = 0.005;
            var dollarPrice = $(this).val();
            var cryptoPrice = dollarPrice / oneTokenPrice;
            $('#cryptoPriceInput').val(cryptoPrice);
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
    <script>
        let web3;
        var textWalletAddress = "";
        var walletAddress = document.getElementById("walletAddress");
        var connectButton  = document.getElementById("btn-connect");
        async function connect() {
            if (window.ethereum) {
                // Cüzdan bağlantısını iste
                await window.ethereum.request({ method: "eth_requestAccounts" });

                // Web3 nesnesini oluştur
                web3 = new Web3(window.ethereum);

                // Hesapları al
                const accounts = await web3.eth.getAccounts();

                if (accounts.length > 0) {
                    var textWalletAddress = accounts[0];  // İlk adresi al
                    console.log(`Wallet: ${textWalletAddress}`);
                    walletAddress.value = textWalletAddress;
                    // Connect butonunu gizle, Disconnect butonunu göster
                    connectButton.style.display = 'none';
                    document.getElementById('disconnectButton').style.display = 'inline-block';
                    Toast.fire({
                        icon: 'success',
                        title: 'Wallet Connected Successfully',

                    })
                }
            } else {
                Toast.fire({
                    icon: 'error',
                    title: 'No Ethereum provider found. Please install a wallet like MetaMask or Trust Wallet.',

                })
            }
        }

        // Disconnect fonksiyonu
        function disconnect() {
            // Web3 bağlantısını kes (Temizlik işlemleri)
            web3 = null;
            textWalletAddress = null;

            // Connect butonunu tekrar göster, Disconnect butonunu gizle
            document.getElementById('btn-connect').style.display = 'inline-block';
            document.getElementById('disconnectButton').style.display = 'none';
            Toast.fire({
                icon: 'success',
                title: 'Disconnected from wallet.',

            });
        }
    </script>

@endsection
