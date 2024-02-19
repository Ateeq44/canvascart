<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MultiKart</title>
</head>
<body style="display: flex; justify-content: center;">
    {{-- @dd($cus_details['order']->fname) --}}
    <div style="width: 50%; display: flex; justify-content: center;  margin: 40px 20px;">
        <div>
            <div style="display: flex; justify-content: center;">
                <img src="delivery.png" alt="">
            </div>
            <div style="display: flex; justify-content: center;margin-top: 40px">
                <img src="{{asset('assets/images/success.png')}}" alt="">
            </div>
            <h1 style="text-align: center;font-family: Lato, sans-serif;">Thank You</h1>
            <h4 style="font-family: Lato, sans-serif;">Tracking ID:{{$cus_details['order']->tracking_no}}</h4>
            <h4 style="font-family: Lato, sans-serif;">Hi {{$cus_details['order']->fname}} {{$cus_details['order']->lname}},</h4>
            <p style="font-family: Lato, sans-serif;">Order Successfully Processsed And Your Order Is On The Way</p>
            <div style="display: flex; justify-content: space-between;">
                <div style="margin-right: 25px;">
                    <h4 style="font-family: Lato, sans-serif;padding: 15px; text-align: center;border: 1px solid #ccc;">Shipping Address</h4>
                    <p style="font-family: Lato, sans-serif;word-break: break-all; padding:10px 20px;">{{$cus_details['order']->address}} {{$cus_details['order']->city}} {{$cus_details['order']->country}}, {{$cus_details['order']->zipcode}}</p>
                </div>
                <div style="margin-left: 25px;">
                    <h4 style="font-family: Lato, sans-serif; padding: 15px;text-align: center;border: 1px solid #ccc;">Billing Address</h4>
                    <p style="font-family: Lato, sans-serif;word-break: break-all; padding:10px 20px;">{{$cus_details['order']->address}} {{$cus_details['order']->city}} {{$cus_details['order']->country}}, {{$cus_details['order']->zipcode}}</p>
                </div>
            </div>
            <table class="order-detail " border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%; font-size: 16px;background: #fafafa; margin-top: 30px;  margin-bottom: 50px;">
                <tbody>
                    <tr align="left" style="font-family: Lato, sans-serif;border-bottom: 1px solid #ccc;">
                        <th>PRODUCT</th>
                        <th style="padding-left: 15px;">DESCRIPTION</th>
                        <th>QUANTITY</th>
                        <th>PRICE </th>
                    </tr>

                    @foreach ($cus_details['order']->order_item as $item)

                    @php
                    $total = $item->price * $item->qty;
                    $images = json_decode($item->product->images);
                    @endphp

                    <tr style="font-family: Lato, sans-serif;margin-top: 10px !important;">
                        <td>
                            <img src="{{asset('upload/product/'.$images[0])}}" alt="" width="80">
                        </td>
                        <td valign="top" style="padding-left: 15px;vertical-align: middle;">
                            {{-- @dd($item->product->product_name) --}}

                            <h5 style="margin-top: 15px;">{{$item->product->product_name}}</h5>
                        </td>
                        <td valign="top" style="padding-left: 15px;">
                            <h5 style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;">Size :
                                <span>{{$item->size}}</span> 
                                <span>{{$item->color}}</span> 
                            </h5>
                            <h5 style="font-size: 14px; color:#444;margin-top: 10px;">QTY : <span>{{$item->qty}}</span></h5>
                        </td>
                        <td valign="top" style="padding-left: 15px;">
                            <h5 style="font-size: 14px; color:#444;vertical-align: middle;"><b>${{$total}}</b></h5>
                        </td>
                    </tr>

                    @endforeach

                    <tr style="font-family: Lato, sans-serif;margin-top: 10px !important;">
                        <td colspan="4">
                            <div style="display: flex;justify-content: space-between;border: 1px solid #ccc; padding:0px 10px;">
                                <h4>Sub Total: ${{$cus_details['order']->total_price}}</h4>
                                <h4></h4>
                            </div>
                            <div style="display: flex;justify-content: space-between;border: 1px solid #ccc; padding:0px 10px;">
                                <h4>Delivery Fee: Free Delivery</h4>
                                <h4></h4>
                            </div>
                            <div style="display: flex;justify-content: space-between;border: 1px solid #ccc; padding:0px 10px;">
                                <h4>Total: ${{$cus_details['order']->total_price}}</h4>
                                <h4></h4>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>