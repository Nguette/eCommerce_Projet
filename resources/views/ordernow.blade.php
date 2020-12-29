@extends("master")
@section("content")
<div class= "custom-product">
 <div class="col-sm-10">
    <table class="table">

     <tbody>
             <tr>
                    <th>Amount</th>
                    <th>{{$total}}</th>
                    
            </tr>

            <tr>
                    <th>Tax</th>
                    <th>$ 0</th>
                   
            </tr>
            <tr>
                    <th>Delivery</th>
                    <th>$ 10</th>
                   
            </tr>

            <tr>
                    <th>Total Amount</th>
                    <th>$ {{$total+10}}</th>
                   
            </tr>
     
     </tbody>
    </table>
     <div>
     <form action="/orderplace" method="POST">
     @csrf
            <div class="form-group">
                <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">Payment method</label> <br><br>
                <input type="radio" value ="cash" name="payment"><span>Online Payment</span><br> <br>
                <input type="radio" value ="cash" name="payment"><span>EMI Payment</span><br><br>
                <input type="radio" value ="cash" name="payment"><span> Payment On Delivery</span><br><br>  
            </div>
            <button type="submit" class="btn btn-default">Order Now</button>
            </form>        
        </div>
    </div>
</div> 
@endsection