<?= $this->extend('admin/layout/admin_layout') ?>

<?= $this->section('content') ?>

<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Transactions</h1>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <div class="card card-default">
            <div class="card-header">
              <button class="btn btn-default contact_add pull-right priv-add priv-add" data-for="itemform" data-id="0">
                  <i class="fa fa-plus"></i> Tambah
              </button>
            </div>
            <div class="card-body">              
              <div class="box-body pad table-responsive">
                <table id="main_table" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="text-align: center;">No</th>
                      <th style="text-align: center;">Trx Date</th>
                      <th style="text-align: center;">Trx Num</th>
                      <th style="text-align: center;">Activity Date</th>
                      <th style="text-align: center;">Activity</th>
                      <th style="text-align: center;">Total</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody id="data_table">

                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<div class="modal fade" id="modal_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" data-keyboard="false">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
          <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    Order Detail <span id="invoice_num">#007612</span>
                    <small class="float-right">
                      <span class="badge bg-info" id="label_status">Status</span>
                    </small>
                  </h4>
                  <hr>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-lg-3 invoice-col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">trx_date</span>
                    </div>
                    <input id="trx_date" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="col-lg-3 invoice-col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rate</span>
                    </div>
                    <input id="header_rate" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Total IDR</span>
                    </div>
                    <input id="header_total_idr" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Total USD</span>
                    </div>
                    <input id="header_total_usd" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="col-lg-6 invoice-col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Fullname</span>
                    </div>
                    <input id="fullname" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Email</span>
                    </div>
                    <input id="email" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Country</span>
                    </div>
                    <input id="country" type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Phone</span>
                    </div>
                    <input id="phone" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
              <!-- /.row -->
<br>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Activity Date</th>
                      <th>Activity Name</th>
                      <th>Note</th>
                      <th>Pax</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody id="detail_table">
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment :</p>

                  <div class="table-responsive">
                    <table class="table" id="payment_table">
                      <tr>
                        <td>2024-01-01 12:00:00</td>
                        <td>paypal</td>
                        <td>USD 73.99</td>
                        <td>Complete</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td id="detail_table_subtotal">0</td>
                      </tr>
                      <tr>
                        <th>Total Payment:</th>
                        <td id="detail_table_payment">0</td>
                      </tr>
                      <tr>
                        <th>Balance:</th>
                        <td id="detail_table_balance">0</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <!-- <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<?= $this->endSection() ?>