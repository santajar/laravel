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
        <form class="form-horizontal form-label-left" novalidate="" action="" method="post">

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.INDUK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NAMA BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama_bmt" name="nama_bmt" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              ALAMAT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.ANGGOTA BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              MPD  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              MPW <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.TELPON <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NAMA KONTAK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">
              NO.KONTAK BMT <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="occupation" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required" type="text">
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
