<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

<script>
    function myFunction(){
        alert('Konfirmasi pembayaran kepada admin untuk aktivasi akun!');
        window.location.href = "login";
    }
</script>

<style>
    ul{
        list-style-type: none ;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #0B4875;
    }

    li{
        float: left;
    }

    li a{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-weight: 500;
    }

    .title h1{
        display: grid;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        color: #4B646F;
    }

    .grid{
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        background-color: white;
        justify-content: center;
    }

    .grid .pay-img{
        grid-column-gap: 5px;
    }

    .grid .pay-img img{
        width: 250px;
        height: 400px;
        margin-top: 20px;
    }

    .grid .arrow img{
        width: 150px;
        margin-top: 130px;
    }

    .button{
        display: grid;
        grid-template-columns: auto auto auto;
        justify-content: center;
        margin-top: 25px;
    }

    .button button{
        font-weight: 500;
        background-color: #2E7BEF;
        font-size: 16px;
        color: white;
        border: none;
        padding: 10px 20px 10px 20px;
        border-radius: 5px;
    }

    .button button:hover{
        cursor: pointer;
        transition: 0.3s;
        background-color: greenyellow;
    }

    .pay-resp{
        display: none;
    }

    @media  screen  and (max-width:1000px){
        .grid{
            display: none;
            grid-template-columns: auto;
            width: 100%;
        } 

        .grid .arrow{
            display: none;
        }

        .pay-resp{
            justify-content: center;
            display: grid;
            padding-left: 20px;
        }

        .pay-resp table{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 10px;
            background: #4B646F;
            color: white;
            border: none;
            border-radius: 10px;
            margin: none;
        }

        td{
            padding: 10px;
        }

    }


</style>
</head>
<body>
    <ul>
        <li><a href="#">Hippocampus</a></li>
    </ul>

    <div class="title">
        <h1>PEMBAYARAN</h1>
    </div>

    <div class="grid">
        <div class="pay-img"><img src="{{ url('image/step1.png') }}" alt=""></div>
        <div class="arrow"><img src="{{ url('image/arrow.png') }}" alt=""></div>
        <div class="pay-img"><img src="{{ url('image/step2.png') }}" alt=""></div>
        <div class="arrow"><img src="{{ url('image/arrow.png') }}" alt=""></div>
        <div class="pay-img"><img src="{{ url('image/step3.png') }}" alt=""></div>
    </div>

    <div class="pay-resp">
        <table>
            <tr>
                <td>1.</td>
                <td>Hubungi  kontak admin
                    dengan nomor 0812xxxxxx</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>      Lakukan pembayaran
                    ke rek. 809xxxxx a.n.
                    xxxxxxxxx</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Kirimkan Bukti Pembayaran</td>
            </tr>
        </table>
    </div>

    <div class="button"><button onclick="myFunction()">Mengerti</button></div>
</body>
</html>