<?php
$csrf_token = csrf_hash();
?>

<script>
    $(document).ready(function(){
        var csrf_hash = $('input[name="<?= csrf_token() ?>"]').val()
        
        var userDataTable = $('#main_table').DataTable({
            'processing': true,
            "oLanguage" : {
                "sProcessing" : "<div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'><b>Please Wait...</b></div></div>"
            },
            'serverSide': true,
            'serverMethod': 'get',
            //'searching': false, // Remove default Search Control
            'ajax': {
                'url':'<?php echo base_url()?>admin/transactions/list',
                // 'beforeSend': function(xhr){
                //     xhr.setRequestHeader('<?= csrf_header() ?>', '<?= csrf_hash() ?>');
                // },
                'data': function(data){

                }
            },

            "initComplete": function(settings, json) {
            if(callBackDataTables != null){
                callBackDataTables();
            }
            },
            "fnDrawCallback": function( oSettings ) {
            if(callBackDataTables != null){
                callBackDataTables();
            }
            },
            "fnPageChange" : function(oSettings){

            }
        });

        var callBackDataTables = function(){
            btnView(".btn-view");
            // deleteList(".contact_del");
        }

        btnView = function(elementId){
            $(elementId).click(function(e){
                e.preventDefault();
                $('#modal_view').modal('show');
                id = $(this).data('id');

                $.ajax({
                    type: 'GET',
                    url: '<?= base_url() ?>admin/transactions/detail', // Update with your server-side processing script
                    data: {id:id},
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#invoice_num').text(response.data.trx_num)
                            $('#label_status').text(response.data.status)
                            $('#trx_date').val(response.data.trx_date)
                            $('#header_rate').val(formatNumberWithTwoDecimals(response.data.rate))
                            $('#header_total_idr').val(formatNumberWithTwoDecimals(response.data.total))
                            $('#header_total_usd').val(formatNumberWithTwoDecimals(response.data.total/response.data.rate))
                            $('#fullname').val(response.data.fullname)
                            $('#email').val(response.data.email)
                            $('#country').val(response.data.country)
                            $('#phone').val(response.data.phone)


                            var subtotalIdr = response.data.total;
                            var subtotalUsd = (response.data.total/response.data.rate);
                            var totalPayment = 0;
                            var balance = 0;

                            var sDetailTable = '';
                            for(var i=0; i<response.data.detail.length; i++) {
                                var detail = response.data.detail[i];

                                sDetailTable += `
                                    <tr>
                                        <td>${i+1}</td>
                                        <td>${detail.activity_date +" "+detail.timeslot}</td>
                                        <td>${detail.options_name}</td>
                                        <td>${detail.note}</td>
                                        <td>${detail.pax}</td>
                                        <td>${formatNumberWithTwoDecimals(detail.total)}</td>
                                    </tr>
                                `;
                            }

                            $('#detail_table').html(sDetailTable);

                            var sPaymentTable = '';
                            for(var i=0; i<response.data.payment.length; i++) {
                                var payment = response.data.payment[i];

                                sPaymentTable += `
                                    <tr>
                                        <td>${payment.payment_date}</td>
                                        <td>${payment.method}</td>
                                        <td>${payment.currency+" "+payment.payment_amount}</td>
                                        <td>${payment.status}</td>
                                    </tr>
                                `;

                                totalPayment += payment.payment_amount
                                if(payment.currency == 'USD') {
                                    balance = subtotalUsd-totalPayment
                                }
                            }

                            $('#payment_table').html(sPaymentTable);
                            $('#detail_table_subtotal').html('Rp '+formatNumberWithTwoDecimals(subtotalIdr)+' ($'+formatNumberWithTwoDecimals(subtotalUsd)+')');
                            $('#detail_table_payment').html((totalPayment!==0 ? '$'+formatNumberWithTwoDecimals(totalPayment) : 0));
                            $('#detail_table_balance').html((totalPayment!==0 ? formatNumberWithTwoDecimals(balance) : 'Rp '+formatNumberWithTwoDecimals(subtotalIdr)));
                            
                        } else {
                            // Handle error response
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX request error
                        console.error(error);
                    }
                });

                e.stopImmediatePropagation();
                return false;
            });
        }

        function formatNumberWithTwoDecimals(number) {
            x = parseFloat(number).toFixed(2);
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

    });
</script>