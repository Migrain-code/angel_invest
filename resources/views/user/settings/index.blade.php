@extends('user.layouts.master')
@section('title', __('Settings'))
@section('styles')
@endsection
@section('content')
        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">{{__('Settings')}}</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>

        <div class="col-xs-12">
            <section class="box over-h">
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-lg-6">
                                <div class="left-col">
                                    <h2 class="mt-20"><small>{{__('Hesap Bakiyeniz')}}</small></h2>
                                    <div class="col-xs-12 no-pl mt-10">
                                        <a class='btn btn-primary btn-corner right15' href='#'><i class="fa fa-long-arrow-down complete color-white"></i>{{__('Al')}}</a>

                                        <a class='btn btn-primary btn-corner right15' href='#'><i class="fa fa-long-arrow-up complete color-white"></i>{{__('Gönder')}}</a>
                                        <a href="#" class="btn btn-primary btn-corner" onclick="connect()"><i class="fa fa-copy"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-col">
                                    <h3 class="mt-20"><small id="walletAddress">{{"ID: ". auth('user')->id()}}</small></h3>
                                    <div class="col-sm-6 no-pr">
                                        <div class="btc-balance">
                                            <h3 class=""><i class="cc BTC color-primary"></i>{{auth('user')->user()->totalToken()}} Angelx</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 no-pl">
                                        <div class="btc-balance">
                                            <h3 class="" style="display: flex
;
    justify-content: center;
    align-items: center;"><i style="width: 25px;
    height: 25px;
    background: #3695eb;
    color: #000 !important;
    border-radius: 100%;
    display: flex
;
    padding: 5px 8px;
    margin-right: 5px;" class="fa fa-dollar color-primary"></i>{{auth('user')->user()->totalTokenPrice()}} USD</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">{{__('Settings')}}</h2>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="form-container">
                            <form id="icon_validate" method="post" action="{{route('user.panel.setting.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 mb-20">

                                        <div class="col-sm-12 avatar-img " style="padding: 5px;border: 1px dashed #5b5b5b;border-radius: 60px;">
                                            <div class="avatar-img-wrapper">
                                                <img src="{{image(auth('user')->user()->image)}}" style="max-width:100px;border-radius: 50%" alt="">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="formfield10">{{__('Dosya Yükle')}}</label>
                                                <span class="desc">"{{__('JPG, GIF veya PNG Maksimum 800K boyutunda')}}"</span>
                                                <div class="controls">
                                                    <input type="file" class="" id="formfield10" name="image">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-lg-6 no-pl">
                                            <div class="form-group">
                                                <label class="form-label">{{__('Ad Soyad')}}</label>
                                                <span class="desc">{{__('Örneğin "Eğer siz değilseniz, lütfen bize bildirin"')}}</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="text" class="form-control" name="name" value="{{auth('user')->user()->name}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 no-pr">
                                            <div class="form-group">
                                                <label class="form-label">{{__('E-posta')}}</label>
                                                <span class="desc">e.g. "some@example.com"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="email" value="{{auth('user')->user()->email}}"  class="form-control" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 no-pl">
                                            <div class="form-group">
                                                <label class="form-label">{{__('Şifre')}} </label>
                                                <span class="desc">e.g. "lorem123"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 no-pr">
                                            <div class="form-group">
                                                <label class="form-label">{{__('Şifre Tekrarı')}}</label>
                                                <span class="desc">e.g. "lorem123"</span>
                                                <div class="controls">
                                                    <i class=""></i>
                                                    <input type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pull-left">
                                            <h4><i class="fa fa-info-circle color-primary complete f-s-14"></i><small>
                                                    {{__('Parolanın en az 8 karakter uzunluğunda ve en fazla 15 karakter olması gerektiğini unutmayın')}}

                                                </small></h4>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-check"></i> {{__('Güncelle')}}</button>
                                            <a type="button" href="{{route('user.panel.index')}}" class="btn btn-default btn-corner"><i class="fa fa-times"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
    <script>
        let web3;
        var textWalletAddress = "";
        var connectButton  = document.getElementById("btn-connect");
        var walletAddress  = document.getElementById("walletAddress");
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
                    // Connect butonunu gizle, Disconnect butonunu göster
                    connectButton.style.display = 'none';
                    document.getElementById('walletAddress').textContent = textWalletAddress;
                    document.getElementById('disconnectButton').style.display = 'inline-block';
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
