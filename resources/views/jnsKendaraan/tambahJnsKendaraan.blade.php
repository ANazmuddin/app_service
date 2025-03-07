<form action="{{route('jnsKendaraan.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Nama jenis Kendaraan : </label>
    <input type="text" name="jns_kendaraan" id="">
    <input type="submit" name ="simpan" value="simpan">
</form>