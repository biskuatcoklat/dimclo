<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 100%;
            height: 100px;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 70px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white" style="width: 120%">DIMCLO</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        {{-- <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: {{ $order->product_id }}</h2>
                    {{-- <p class="sub-heading">Tracking No. fabcart2025 </p> --}}
                    <p class="sub-heading">Order Date: {{ $order->created_at }} </p>
                    <p class="sub-heading">Email Address: {{ $order->email }} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{ $order->name }}  </p>
                    <p class="sub-heading">Address: {{ $order->alamat }} </p>
                    <p class="sub-heading">Phone Number: {{ $order->nohp }} </p>
                    {{-- <p class="sub-heading">City,State,Pincode:  </p> --}}
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th class="w-20">Harga</th>
                        <th class="w-20">Banyak Pesanan</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{ $order->product_title }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price * $order->quantity }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> {{ $order->price * $order->quantity }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> {{ null }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> {{ $order->price * $order->quantity }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: {{ $order->payment_status }}</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright {{ date('Y') }} - DiMCLO. All rights reserved.
                <a href="https://www.dimclo.com/" class="float-right">www.dimclo.com</a>
            </p>
        </div>
    </div>

</body>
</html>
