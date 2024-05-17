<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Contracts Management
        <small>View & Print</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Contracts Management</a></li>
        <li class="active">View & Print</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row" id="order_vue_app_id">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Client Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="client_full_name">Full Name: {{orderData.client_full_name}}</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_email" class="control-label">Client Email: {{orderData.client_email}}</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_phone_number" class="control-label">Client Phone Number: {{orderData.client_phone_number}}</label>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Real estate unit data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <!-- select -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="real_estate_unit_type">Real Estate Unit Type: {{orderData.real_estate_unit_type}}</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="location_latitude">Latitude: {{orderData.location_latitude}}</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="location_longitude">Longitude: {{orderData.location_longitude}}</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="client_address">Address: <br>
                                {{orderData.client_address}}</label>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Real estate unit rooms</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Room Type</th>
                            <th>count</th>
                        </tr>
                        <tr v-for="(Real_estate_unit_roomItem, itemKey) in Real_estate_unit_rooms_data" :key="itemKey">
                            <td>{{itemKey + 1}}</td>
                            <td>{{Real_estate_unit_roomItem.room_type_title}}</td>
                            <td>{{Real_estate_unit_roomItem.count_of_rooms}}</td>
                        </tr>
                        <tr>
                            <td v-if="Real_estate_unit_rooms_data.length < 1" colspan="3">there is no data to display.</td>
                        </tr>
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->

        <!-- left column -->
        <div v-for="(Real_estate_unit_room_item_detail,k) in all_rooms_details_list" :key="k" class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Room Type [ {{Real_estate_unit_room_item_detail.room_type_title}} ] -
                        <div style="margin-top: 10px;">
                            <label for="height">length: {{Real_estate_unit_room_item_detail.length}}</label> X
                            <label for="height">width: {{Real_estate_unit_room_item_detail.width}}</label> X
                            <label for="height">height: {{Real_estate_unit_room_item_detail.height}}</label>
                        </div>
                    </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="square_meters">Square Meters: {{Real_estate_unit_room_item_detail.square_meters}}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price_per_square_meter">Price per square meter: {{Real_estate_unit_room_item_detail.price_per_square_meter}}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_cost_of_room_finishing">Total cost of room finishing: {{Real_estate_unit_room_item_detail.total_cost_of_room_finishing}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Other Order data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="client_order_details">Client Order Details:</label>
                            <p>{{orderData.client_order_details}}</p>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_unit_finishing_cost">Total unit finishing cost: </label>
                                    <p>{{total_unit_finishing_cost}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="proposed_deadline_for_deleivery">Deadline: </label>
                                    <p>{{orderData.proposed_deadline_for_deleivery}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <!-- select -->
                                <div class="form-group">
                                    <label for="preferred_payment_method">Preferred Payment Method: </label>
                                    <p>{{orderData.preferred_payment_method}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="admin_notes">Admin notes: </label>
                            <p>{{orderData.admin_notes}}</p>
                        </div>

                        <div class="form-group">
                            <label for="order_details">Order details: </label>
                            <p>{{orderData.order_details}}</p>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- select -->
                                <div class="form-group">
                                    <label for="client_order_status">Order Status: </label>
                                    <p>{{orderData.client_order_status}}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!-- /.box -->

        </div>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Other Contract data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p><?= ($orderData['contract_details']) ? $orderData['contract_details'] : DefaultContract() ?></p>
                                    


                                <!-- تعريف الأطراف:
This agreement is entered into between [Company Name], hereinafter referred to as "Contractor", and [Client Name], hereinafter referred to as "Client".
وصف الخدمات:
The Contractor agrees to provide construction and finishing services for the renovation of [Property Description] located at [Property Address].
The scope of work includes but is not limited to: demolition, carpentry, electrical work, plumbing, painting, and finishing as per the agreed-upon specifications outlined in Appendix A.
التكلفة والمدفوعات:
The total cost of the project is [Total Amount], payable in installments as outlined in Appendix B.
The Client agrees to make a down payment of [Down Payment Amount] upon signing this contract, with the remaining balance to be paid according to the agreed-upon payment schedule.
جدولة المشروع:
The Contractor agrees to complete the project within [Timeframe] from the commencement date, barring any unforeseen circumstances or delays beyond the Contractor's control.
مواد البناء:
All construction materials and finishes used in the project shall meet industry standards and specifications outlined in the project plans. Substitutions may be made with the Client's approval.
تغييرات وتعديلات:
Any changes or modifications to the scope of work must be agreed upon in writing by both parties and may result in additional costs and/or extensions to the project timeline.
ضمان العمل:
The Contractor warrants that all work performed under this agreement will be done in a professional and workmanlike manner and guarantees against defects in workmanship for a period of [Warranty Period] following the completion date.
تسليم المفتاح:
Upon completion of the project and receipt of final payment, the Contractor shall provide the Client with keys to the renovated property.
تفسير العقد:
This agreement constitutes the entire understanding between the parties and supersedes all prior agreements and understandings, whether written or oral, relating to the subject matter herein.
قانون العقد:
This agreement shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes arising under this agreement shall be resolved through arbitration in [Arbitration Location]. -->

                                </textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" @click="saveData()" class="btn btn-primary pull-right">
                            <i class="fa fa-chevron-circle-right"></i>
                            Submit & Finish</button>
                        <!-- <a href="<?= base_url() ?>dashboard/orders/update/<?= $id ?>">
                            <button type="button" class="btn btn-primary pull-left">
                                <i class="fa fa-chevron-circle-left"></i>
                                Back To Step1</button>
                        </a> -->
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>

<?= $this->section('js-scripts') ?>

<script src="<?= base_url('public/dashboard/bower_components/ckeditor/ckeditor.js') ?>"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
    });
</script>

<script src="<?= base_url('public/js/axios/axios.js') ?>"></script>
<script src="<?= base_url('public/js/vue/vue.js') ?>"></script>
<script>
    const order_vue_app = new Vue({
        el: "#order_vue_app_id",
        data() {
            return {
                RoomsTypes_list: <?= json_encode($RoomsTypes_list) ?>,
                Real_estate_unit_rooms_data: [],
                Real_estate_unit_rooms_details_list: <?= json_encode($real_estate_unit_rooms_json) ?>,
                all_rooms_details_list: [],

                defaultReal_estate_unit_room_item: {
                    "room_type_id": "",
                    "room_type_title": "",
                    "count_of_rooms": 1,
                },

                defaultReal_estate_unit_room_details_item: {
                    "room_per_order_id": "",
                    // "client_order_id":"",
                    // "user_id":"",
                    "room_type_id": "",
                    "length": 0,
                    "width": 0,
                    "height": 0,
                    "price_per_square_meter": 0,
                    "square_meters": 0,
                    "total_cost_of_room_finishing": 0,
                },

                // Total unit finishing cost
                total_unit_finishing_cost: 0,

                // Other Order data
                orderData: <?= json_encode($orderData) ?>,

                // contract
                contract_details:""
            }
        },
        created() {
            this.get_all_rooms_details_list();
        },
        methods: {
            get_all_rooms_details_list() {
                this.Real_estate_unit_rooms_details_list = JSON.parse(this.Real_estate_unit_rooms_details_list);
                if (this.Real_estate_unit_rooms_details_list['length'] > 0) {
                    // alert(this.Real_estate_unit_rooms_details_list.length)
                    let array = this.Real_estate_unit_rooms_details_list;
                    for (let index = 0; index < array.length; index++) {
                        let element = array[index];
                        if (element.count_of_rooms > 1) {
                            for (let keyIndex = 0; keyIndex < element.count_of_rooms; keyIndex++) {
                                let element2 = array[keyIndex];

                                this.all_rooms_details_list.push(element)
                            }
                        } else {
                            this.all_rooms_details_list.push(element)
                        }
                    }
                };
                this.total_unit_finishing_cost = this.orderData.total_unit_finishing_cost;
                this.Real_estate_unit_rooms_data = JSON.parse(this.orderData.real_estate_unit_rooms_json);
            },
            selectThisDesign(design, k, designs) {
                // alert(k);
                // alert(JSON.stringify(design));
                this.all_rooms_details_list[k]['design_price_id'] = design.design_price_id;
                document.getElementById('all_rooms_details_list').value = JSON.stringify(this.all_rooms_details_list);
                for (let index = 0; index < designs.length; index++) {
                    const design = designs[index];
                    document.getElementById('design_title' + k + design.design_price_id).checked = false;
                };
                if (document.getElementById('design_title' + k + design.design_price_id).checked) {
                    document.getElementById('design_title' + k + design.design_price_id).checked = false;
                } else {
                    document.getElementById('design_title' + k + design.design_price_id).checked = true;
                    this.all_rooms_details_list[k]['price_per_square_meter'] = design.price_per_square_meter;
                }
                // calc
                this.calcAllDesigns();
            },
            calcAllDesigns() {
                var array = this.all_rooms_details_list;
                let sumAll = 0;
                for (let index = 0; index < array.length; index++) {
                    const element = array[index];
                    this.all_rooms_details_list[index].square_meters = parseFloat(element['length']) * parseFloat(element.width) * parseFloat(element.height);

                    this.all_rooms_details_list[index].total_cost_of_room_finishing = this.all_rooms_details_list[index].square_meters * this.all_rooms_details_list[index].price_per_square_meter;

                    sumAll = sumAll + parseFloat(this.all_rooms_details_list[index].total_cost_of_room_finishing);
                }
                this.total_unit_finishing_cost = sumAll;
            },
            addNewRoomType: function() {
                // var defaultReal_estate_unit_room_item = Object.create(this.defaultReal_estate_unit_room_item);
                var defaultReal_estate_unit_room_item = Object.assign({}, this.defaultReal_estate_unit_room_item);
                this.Real_estate_unit_rooms_data.push(defaultReal_estate_unit_room_item);
            },
            recount_Real_estate_unit_rooms_details_list_when_room_type_idChange: function(event) {
                var room_type_id = event.target.value;
                var room_type_title = event.target.selectedOptions[0].innerHTML;
                let Real_estate_unit_rooms_data = this.Real_estate_unit_rooms_data;
                for (let index = 0; index < Real_estate_unit_rooms_data['length']; index++) {
                    var element = Real_estate_unit_rooms_data[index];
                    for (let k = 0; k < element.count_of_rooms; k++) {
                        room_type_id = element.room_type_id;
                        room_type_title = element.room_type_title;
                        console.log(room_type_id)
                        console.log(room_type_title)
                        var defaultReal_estate_unit_room_details_item = Object.assign({}, this.defaultReal_estate_unit_room_details_item);

                        defaultReal_estate_unit_room_details_item.room_type_id = room_type_id;
                        defaultReal_estate_unit_room_details_item.room_type_title = room_type_title;
                        this.Real_estate_unit_rooms_details_list.push(defaultReal_estate_unit_room_details_item);

                    }

                }
                // defaultReal_estate_unit_room_details_item.
            },
            recount_Real_estate_unit_rooms_details_list: function(Real_estate_unit_roomItem) {
                console.log(Real_estate_unit_roomItem);
                let Real_estate_unit_rooms_data = this.Real_estate_unit_rooms_data;

                for (let k = 0; k < Real_estate_unit_roomItem.count_of_rooms; k++) {
                    room_type_id = Real_estate_unit_roomItem.room_type_id;
                    room_type_title = Real_estate_unit_roomItem.room_type_title;
                    console.log(room_type_id)
                    console.log(room_type_title)
                    var defaultReal_estate_unit_room_details_item = Object.assign({}, this.defaultReal_estate_unit_room_details_item);

                    defaultReal_estate_unit_room_details_item.room_type_id = room_type_id;
                    defaultReal_estate_unit_room_details_item.room_type_title = room_type_title;
                    this.Real_estate_unit_rooms_details_list.push(defaultReal_estate_unit_room_details_item);

                }


                // defaultReal_estate_unit_room_details_item.
            },

            saveData() {
                let id = "<?= $id ?>"
                this.orderData.total_unit_finishing_cost = this.total_unit_finishing_cost;
                let postedData = {
                    "has_a_contract": true,
                    "contract_details": document.getElementById("editor1").innerHTML
                };
                console.log("postedData: ");
                console.log(postedData);
                axios.post(`<?= base_url() ?>api/Contracts/save/${id}`, postedData).then(res => {
                    console.log(res)
                    alert("تم الحفظ بنجاح")
                });
            }
            // recount_Real_estate_unit_rooms_details_list_when_room_type_idChange: function(Real_estate_unit_roomItem) {
            //     console.log(Real_estate_unit_roomItem);
            //     let Real_estate_unit_rooms_data = this.Real_estate_unit_rooms_data;

            //     for (let k = 0; k < Real_estate_unit_roomItem.count_of_rooms; k++) {
            //         room_type_id = Real_estate_unit_roomItem.room_type_id;
            //         room_type_title = Real_estate_unit_roomItem.room_type_title;
            //         console.log(room_type_id)
            //         console.log(room_type_title)
            //         var defaultReal_estate_unit_room_details_item = Object.assign({}, this.defaultReal_estate_unit_room_details_item);

            //         defaultReal_estate_unit_room_details_item.room_type_id = room_type_id;
            //         defaultReal_estate_unit_room_details_item.room_type_title = room_type_title;
            //         this.Real_estate_unit_rooms_details_list.push(defaultReal_estate_unit_room_details_item);

            //     }


            // defaultReal_estate_unit_room_details_item.
            // }
        },
        computed:{
           
        }
    });
</script>
<?= $this->endSection() ?>