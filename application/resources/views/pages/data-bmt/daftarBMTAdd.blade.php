@extends('layout.master')

@section('title')
  <title>Tambah BMT</title>
@endsection

@section('headscript')

@endsection

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3> Tambah BMT <small> </small> </h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Data BMT </h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal form-label-left" novalidate="" action="{{ route('daftar.bmtpost') }}" method="post">
          {{ csrf_field()}}
          <div class="item form-group {{ $errors->has('NIK_BMT') ? 'has-error' : '' }}">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.INDUK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NIK_BMT" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="NIK_BMT" placeholder="No INDUK BMT" required="required" type="text" value="{{ old('NIK_BMT') }}">
              @if($errors->has('NIK_BMT'))
              <span class="help-block">
                <strong>{{ $errors->first('NIK_BMT')}}
                </strong>
              </span>
              @endif
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NAMA BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NAMA_BMT" name="NAMA_BMT" data-validate-length-range="1,50" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="NAMA BMT" value="{{ old('NAMA_BMT') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              ALAMAT BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="ALAMAT_BMT" required="required" name="ALAMAT_BMT" class="form-control col-md-7 col-xs-12" placeholder="ALAMAT BMT">{{ old('ALAMAT_BMT') }}</textarea>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.ANGGOTA BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NO_ANGGOTA_BMT" name="NO_ANGGOTA_BMT" data-validate-length-range="5,50" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="NO. ANGGOTA BMT" value="{{ old('NO_ANGGOTA_BMT') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              MPD  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="MPD" name="MPD" data-validate-length-range="5,50" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="MPD" value="{{ old('MPD') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              MPW <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="MPW" name="MPW" data-validate-length-range="5,50" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="MPW" value="{{ old('MPW') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.TELPON <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NO_TELPON" name="NO_TELPON" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="NO. TELPON" value="{{ old('NO_TELPON') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NAMA KONTAK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NAMA_KONTAK" name="NAMA_KONTAK" data-validate-length-range="1,70" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="NAMA KONTAK BMT" value="{{ old('NAMA_KONTAK') }}">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.KONTAK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="NOMOR_KONTAK" name="NOMOR_KONTAK" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="NOMOR KONTAK BMT" value="{{ old('NOMOR_KONTAK') }}">
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="{{ asset('vendors/validator/validator.min.js') }}"></script>
<script>
  // initialize the validator function
  validator.message.date = 'not a real date';

  // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
  $('form')
    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
    .on('change', 'select.required', validator.checkField)
    .on('keypress', 'input[required][pattern]', validator.keypress);

  $('.multi.required').on('keyup blur', 'input', function() {
    validator.checkField.apply($(this).siblings().last()[0]);
  });

  $('form').submit(function(e) {
    e.preventDefault();
    var submit = true;

    // evaluate the form using generic validaing
    if (!validator.checkAll($(this))) {
      submit = false;
    }

    if (submit)
      this.submit();

    return false;
  });
</script>
@endsection
