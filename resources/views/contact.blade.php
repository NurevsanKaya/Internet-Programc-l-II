@extends('layout')

@section('main')
    <h5>iletişim sayfa içeriği</h5>

    @if($errors->any())
        hatalı veri girişi
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
        @endif

    <h5>iletişim formu</h5>
    <form action="" method="POST">
        @csrf
        isminiz:
        <!-- old('isim') eski ismi geri yüklemek için-->
        <br/><input type="text" name="isim" value="{{old('isim')}}"/>
        <br/><br/>
        konu:
        <br/>
        <select name="konu">
            <option {{old('konu')=='öğrenci işleri'? 'selected':''}}>öğrenci işleri</option>
            <option {{old('konu')=='sosyal olanaklar'? 'selected':''}}>sosyal olanaklar</option>
            <option {{old('konu')=='diğer'? 'selected':''}}>diğer</option>

        </select>
        <br/><br/>
        Mesajınız:
        <br/>
        <textarea name="mesaj">{{old('mesaj')}}</textarea>
        <br/><br/>
        <input type="submit" value="mesajı gönder"/>
    </form>
@endsection
