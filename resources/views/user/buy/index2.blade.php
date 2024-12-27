@extends('user.layouts.master')
@section('title', 'Satın Al')
@section('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
    <script src="https://unpkg.com/@walletconnect/web3-provider@1.6.6/dist/umd/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@web3auth/web3auth@0.9.0/dist/web3auth.umd.min.js"></script>
    <script src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
    <style>

        .wallet-option{
            border-bottom: 1px solid #d0d0d0;
            padding: 15px;
            transition: 0.4s;
            cursor: pointer;
        }
        .wallet-option:hover{
            background: #ecebeb;
            border-radius: 15px;
        }
    </style>
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

                                        <select type="text" style="width: 85%;" name="system_wallet_address" class="form-control">
                                            <option value="">Select Wallet</option>
                                            @foreach($systemWallets as $systemWallet)
                                                <option @selected(old('system_wallet_address') == $systemWallet->wallet_id) value="{{$systemWallet->wallet_id}}">
                                                    {{$systemWallet->wallet_id}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="" type="button" onclick="copyButton()" style="width: 15%;height: 50px;display: flex
;
    justify-content: center;
    align-items: center;"><i class="fa fa-copy"></i></button>
                                    </div>

                                </div>

                                <label class="form-label">{{__('Cüzdan Adresiniz')}}</label>
                                <span class="desc"></span>

                                <div class="input-group mb-10">
                                            <span class="input-group-addon">
                                                <span class="arrow"></span>
                                                <img src="/user/assets/icons/wallet-o.png" alt="icon">
                                            </span>
                                    <input type="text" id="walletAddress" value="{{old('user_wallet_address')}}" name="user_wallet_address"
                                           class="form-control" readonly placeholder="OxsD12F32xvW3deG5...">
                                </div>
                                <label class="form-label">{{__('Tx ID')}}</label>
                                <span class="desc"></span>

                                <div class="input-group mb-10">
                                            <span class="input-group-addon">
                                                <span class="arrow"></span>
                                                <img src="/user/assets/icons/wallet-o.png" alt="icon">
                                            </span>
                                    <input type="text" name="tx_id" class="form-control" value="{{old('tx_id')}}" placeholder="...">
                                </div>

                                <div class="col-lg-5 no-pl">

                                    <label class="form-label">{{__('Tutar')}}</label>
                                    <div class="input-group">
                                        <input type="text" name="amount" value="{{old('amount')}}" class="form-control" id="dollarPriceInput"
                                               placeholder="1000"
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
                                        <input type="text" class="form-control" id="cryptoPriceInput"
                                               placeholder="Total Token"
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
    <div class="modal fade" id="walletModal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px !important;"> <!-- Modal Başlığı -->

                <div class="modal-body text-center">
                    <div class="wallet-option mb-4" onclick="connectMetaMask()">
                        <img src="/user/assets/images/metamask.png" alt="MetaMask" style="width: 50px;">
                        <h3 class="mt-2" style="color: black; font-weight: bold;font-size: large;"> Meta Mask</h3>
                        <p>MetaMask Cüzdanınıza Bağlanın</p>
                    </div>
                    <div class="wallet-option mb-4" onclick="connectTrustWallet()">
                        <img src="/user/assets/images/trustwallet.png" alt="MetaMask" style="width: 50px;">
                        <h3 class="mt-2" style="color: black; font-weight: bold;font-size: large;"> TrustWallet</h3>
                        <p>TrustWallet Cüzdanınıza Bağlanın</p>
                    </div>
                    {{--
                        <div class="wallet-option" onclick="connectWalletConnect()">
                        <img src="/user/assets/images/walletconnect.png"  alt="WalletConnect" style="width:50px">
                        <h5 class="mt-2" style="color: black; font-weight: bold;font-size: large;">
                            WalletConnect
                        </h5>
                        <p>Bağlanmak için WalletConnect ile tarayın</p>
                    </div>
                    --}}
                </div> <!-- Modal Altbilgisi -->

            </div>
        </div>
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
        $('#cryptoPriceInput').on('input', function () {
            let oneTokenPrice = 0.005;
            var dollarPrice = $(this).val();
            var cryptoPrice = dollarPrice * oneTokenPrice;
            $('#dollarPriceInput').val(cryptoPrice);
        });
    </script>
    <script>
        let web3Modal;
        let provider;
        let web3;

        window.addEventListener('load', async () => {
            const providerOptions = {
                walletconnect: {
                    package: WalletConnectProvider.default,
                    options: {
                        infuraId: "4973a0f2383a47999fedf147bf68737f"
                    }
                },
                metamask: {
                    package: true
                },
                trustwallet: {
                    package: WalletConnectProvider.default,
                    options: {
                        infuraId: "4973a0f2383a47999fedf147bf68737f"
                    }
                }
            };

            web3Modal = new Web3Modal.default({
                cacheProvider: false,
                providerOptions
            });

            // Otomatik olarak cüzdan bağlamak için kontrol
            const cachedAddress = localStorage.getItem('walletAddress');
            if (cachedAddress) {
                document.getElementById('walletAddress').value = cachedAddress;
                document.getElementById('btn-connect').style.display = 'none';
                document.getElementById('disconnectButton').style.display = 'inline-block';
            }
        });

        function openModal() {
            document.getElementById('walletModal').style.display = "block";
        }

        function closeModal() {
            $('#walletModal').modal('hide');
        }

        async function connectMetaMask() {
            closeModal();
            if (window.ethereum && window.ethereum.isMetaMask) {
                const MMSDK = new MetaMaskSDK.MetaMaskSDK({
                    dappMetadata: {
                        name: "Angelx DAPP",
                    },
                    infuraAPIKey: "4973a0f2383a47999fedf147bf68737f",
                });
                const accounts = await MMSDK.connect();
                if (accounts.length > 0) {
                    const walletAddressTex = accounts[0];
                    handleWalletConnected(walletAddressTex);
                }
            } else {
                alert('MetaMask is not installed. Please install it to use this option.');
            }
        }

        async function connectTrustWallet() {
            closeModal();
            if (window.ethereum && window.ethereum.isMetaMask) {
                provider = window.ethereum;
                await provider.request({method: 'eth_requestAccounts'});
                connectWallet();
            } else {
                alert('TrustWallet is not installed. Please install it to use this option.');
            }
        }

        async function connectWalletConnect() {
            closeModal();
            provider = await web3Modal.connectTo('walletconnect');
            connectWallet();
        }

        async function connectWallet() {
            web3 = new Web3(provider);
            const accounts = await web3.eth.getAccounts();
            if (accounts.length > 0) {
                const walletAddress = accounts[0];
                handleWalletConnected(walletAddress);
            }
        }

        function handleWalletConnected(walletAddress) {
            document.getElementById('walletAddress').value = walletAddress;
            document.getElementById('btn-connect').style.display = 'none';
            document.getElementById('disconnectButton').style.display = 'inline-block';

            // Cüzdan adresini localStorage'a kaydet
            localStorage.setItem('walletAddress', walletAddress);

            Toast.fire({
                icon: 'success',
                title: 'Wallet Connected Successfully',
            });
        }

        function disconnect() {
            if (provider && provider.close) {
                provider.close();
            }
            provider = null;
            web3 = null;
            document.getElementById('walletAddress').value = "";
            document.getElementById('btn-connect').style.display = 'inline-block';
            document.getElementById('disconnectButton').style.display = 'none';

            // Cüzdan adresini localStorage'dan sil
            localStorage.removeItem('walletAddress');

            Toast.fire({
                icon: 'success',
                title: 'Disconnected from wallet.',
            });
        }
    </script>
    <script>
        function copyButton(){

            let copWalletAddress = $('select[name="system_wallet_address"]').val();
            if(copWalletAddress == ""){
                Toast.fire({
                    icon: 'info',
                    title: '{{__("Lütfen Bir Cüzdan Seçiniz.")}}',
                });
            } else{
                let splittedAddress = copWalletAddress.split('|');
                let textWalletAddress = splittedAddress[1];
                navigator.clipboard.writeText(textWalletAddress) .then(() => {
                    Toast.fire({
                        icon: 'success',
                        title: 'Wallet Address Copied',
                    });
                })
                .catch(err => {
                    console.error('Failed to copy wallet address: ', err);
                });
            }
            console.log(copWalletAddress);

        }
    </script>

@endsection
