(async () => {
    const provider = new Web3.providers.HttpProvider('https://evm.cronos.org/', {
        keepAlive: true,
        cors: true,
        headers: [
          { name: 'Content-Type', value: 'application/json' },
        ],
      });
    const web3 = new Web3(provider);

    const contractAddress = '0x7A203020bf188A0dC5948A5125722789CAd63CF2';
    const abi = [
        {
            "inputs": [
                {
                    "internalType": "address",
                    "name": "account",
                    "type": "address"
                }
            ],
            "name": "balanceOf",
            "outputs": [
                {
                    "internalType": "uint256",
                    "name": "",
                    "type": "uint256"
                }
            ],
            "stateMutability": "view",
            "type": "function"
        }
    ];

    const contract = new web3.eth.Contract(abi, contractAddress);

    const teamWallet = "0xEE6F68Bd820dF32B45FFa7CDEf560e4B0Cad1e69";
    const reservesWallet = "0xe141534229507B97439078B9F8A0F77DEC41411E";
    const productsWallet = "0x36706478bCd950F92365cd92e108A073c19033Da";
    const marketingWallet = "0x572ad49A9C0079247582dC35Bb2F7A65876c7680";

    async function getWalletBalance(walletAddress) {
        const balance = await contract.methods.balanceOf(walletAddress).call();
        return BigInt(balance);
    }

    async function updateProgressBars() {
        const teamBalance = await getWalletBalance(teamWallet);
        const reservesBalance = await getWalletBalance(reservesWallet);
        const productsBalance = await getWalletBalance(productsWallet);
        const marketingBalance = await getWalletBalance(marketingWallet);

        const teamProgress = (teamBalance * BigInt(100)) / BigInt("50000000000000000000000000000000");
        const reservesProgress = (reservesBalance * BigInt(100)) / BigInt("25000000000000000000000000000000");
        const productsProgress = (productsBalance * BigInt(100)) / BigInt("25000000000000000000000000000000");
        const marketingProgress = (marketingBalance * BigInt(100)) / BigInt("50000000000000000000000000000000");

        document.querySelector(".team-wallet-tracker").style.width = `${teamProgress}%`;
        document.querySelector(".reserves-wallet-tracker").style.width = `${reservesProgress}%`;
        document.querySelector(".products-wallet-tracker").style.width = `${productsProgress}%`;
        document.querySelector(".marketing-wallet-tracker").style.width = `${marketingProgress}%`;
    }

    updateProgressBars();
})();