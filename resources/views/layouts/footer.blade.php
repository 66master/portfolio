@section('footer')
<footer class="footer">

{{--
{{ var_dump(get_images('/public/logos')) }}
@foreach({{ get_images('/public/logos') }} as $logo_file)

<img src="{{ asset('/').'storage/logos'.$logo_file }}" height="50" class="logo" />

@endforeach
--}}


<p class="copyright"><small>&copy; 2017 Takuya Ohno<br />※各制作物の著作権は各々の企業に帰属します。</small></p>

</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/original.js')}}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
@endsection