<form action="/test" method="post">
    @csrf
    @for($i=15;$i<=19;$i++)
  <!-- suppose $i is primary key -->
    <div style="margin-bottom:10px">
    <input type="checkbox" name="checks[]" value="{{$i}}">
    @error('checks')
                        {{$message}}
                        @enderror
    <label>Product Name</label> <input type="text" name="products[{{$i}}]" value="{{'jawad' . $i}}">
    <label>Product Price</label> <input type="text" name="prices[{{$i}}]">
    </div>
    
    @endfor
    
    
    <input type="submit" value="click me">
</form>