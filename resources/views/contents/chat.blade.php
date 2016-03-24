<!-- Chat box -->
<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-comments-o"></i>

    <h3 class="box-title">Diskussion</h3>

    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
      <div class="btn-group" data-toggle="btn-toggle">
        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
      </div>
    </div>
  </div>
  <div class="box-body chat" id="chat-box">
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/leffe.jpg') }}" alt="user image" class="online">

      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 15:00</small>
          Leffe
        </a>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
    <!-- /.item -->
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/eva.jpg') }}" alt="user image" class="offline">

      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 14:20</small>
          Eva
        </a>
        Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.
      </p>
    </div>
    <!-- /.item -->
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/marcus.jpg') }}" alt="user image" class="offline">
      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 13:00</small>
          Marcus Johansson
        </a>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.
      </p>

    </div>
    <!-- /.item -->
  </div>
  <!-- /.chat -->
  <div class="box-footer">
    <div class="input-group">
      <input class="form-control" placeholder="Skriv ett meddelande...">

      <div class="input-group-btn">
        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- /.box (chat box) -->
