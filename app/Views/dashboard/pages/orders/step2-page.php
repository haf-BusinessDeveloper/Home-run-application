<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Orders Management
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Orders Management</a></li>
        <li class="active">Create</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row" id="order_vue_app_id">
        <textarea id="all_rooms_details_list" rows="5" class="form-control">{{all_rooms_details_list}}</textarea>
        <!-- left column -->
        {{Real_estate_unit_rooms_details_list}}
        <div v-for="(Real_estate_unit_room_item_detail,k) in all_rooms_details_list" :key="k" class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Room Type [ {{Real_estate_unit_room_item_detail.room_type_title}} ] -
                        <div style="margin-top: 10px;">
                            <label for="height">length</label>
                            <input @change="calcAllDesigns()" v-model="Real_estate_unit_room_item_detail.length" type="text" name="length" id="length" placeholder="length" style="width: 80px;"> X
                            <label for="height">width</label>
                            <input @change="calcAllDesigns()" v-model="Real_estate_unit_room_item_detail.width" type="text" name="width" id="width" placeholder="width" style="width: 80px;"> X
                            <label for="height">height</label>
                            <input @change="calcAllDesigns()" v-model="Real_estate_unit_room_item_detail.height" type="text" name="height" id="height" placeholder="height" style="width: 80px;">
                        </div>
                    </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-12">

                                <div v-for="(design,index) in Real_estate_unit_room_item_detail.designs" class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="box box-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <input @click="selectThisDesign(design, k, Real_estate_unit_room_item_detail.designs)" class="img-circle" type="checkbox" name="design_title" :id="'design_title'+k+design.design_price_id"><label @click="selectThisDesign(design, k, Real_estate_unit_room_item_detail.designs)" :for="'design_title'+k+design.design_price_id">{{design.design_title}}</label>
                                        <div class="widget-user-header bg-black" :style="'background: url('+'<?= base_url('writable/uploads/') ?>'+design.design_image+') center center;'">
                                            <!-- <h3 class="widget-user-username">Elizabeth Pierce</h3>
                                            <h5 class="widget-user-desc">Web Designer</h5> -->
                                        </div>
                                        <!-- <div class="widget-user-image">
                                            <img class="img-circle" src="<?= base_url('public/dashboard') ?>/dist/img/user3-128x128.jpg" alt="User Avatar">
                                        </div> -->
                                        <div class="box-footer">
                                            <div class="row">
                                                <div class="col-sm-2 border-right">
                                                    <div class="description-block">
                                                        <!-- <h5 class="description-header">3,200</h5>
                                                        <span class="description-text">SALES</span> -->
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-8 border-right">
                                                    <div class="description-block">
                                                        <span class="description-text">Price per square meter</span>
                                                        <h5 class="description-header">
                                                            {{design.price_per_square_meter}}
                                                        </h5>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-2">
                                                    <div class="description-block">
                                                        <!-- <h5 class="description-header">35</h5>
                                                        <span class="description-text">PRODUCTS</span> -->
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="square_meters">Square Meters</label>
                                    <input disabled v-model="Real_estate_unit_room_item_detail.square_meters" type="text" class="form-control" name="square_meters" id="square_meters">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price_per_square_meter">Price per square meter</label>
                                    <input v-model="Real_estate_unit_room_item_detail.price_per_square_meter" type="text" class="form-control" name="price_per_square_meter" id="price_per_square_meter">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_cost_of_room_finishing">Total cost of room finishing</label>
                                    <input v-model="Real_estate_unit_room_item_detail.total_cost_of_room_finishing" type="text" class="form-control" name="total_cost_of_room_finishing" id="total_cost_of_room_finishing">
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
                            <label for="client_order_details">Client Order Details</label>
                            <textarea v-model="Other_Order_data.client_order_details" type="text" class="form-control" name="client_order_details" id="client_order_details"></textarea>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="total_unit_finishing_cost">Total unit finishing cost</label>
                                <input v-model="total_unit_finishing_cost" type="text" class="form-control" name="total_unit_finishing_cost" id="total_unit_finishing_cost" placeholder="Enter total unit finishing cost">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="proposed_deadline_for_deleivery">Deadline</label>
                                <input v-model="Other_Order_data.proposed_deadline_for_deleivery" type="date" class="form-control" name="proposed_deadline_for_deleivery" id="proposed_deadline_for_deleivery" placeholder="Enter proposed deadline for deleivery">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- select -->
                            <div class="form-group">
                                <label for="preferred_payment_method">Preferred Payment Method</label>
                                <select v-model="Other_Order_data.preferred_payment_method" required name="preferred_payment_method" id="preferred_payment_method" class="form-control">
                                    <option value="">Choose</option>
                                    <option value="Bank">Bank Transfer</option>
                                    <option selected value="Cash">Cash</option>
                                    <option value="Visa">Visa</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="admin_notes">Admin notes</label>
                            <textarea v-model="Other_Order_data.admin_notes" type="text" class="form-control" name="admin_notes" id="admin_notes"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="order_details">Order details</label>
                            <textarea v-model="Other_Order_data.order_details" type="text" class="form-control" name="order_details" id="order_details"></textarea>
                        </div>
                        <div class="col-md-3">
                            <!-- select -->
                            <div class="form-group">
                                <label for="order_status">Order Status</label>
                                <select v-model="Other_Order_data.order_status" required name="order_status" id="order_status" class="form-control">
                                    <option value="">Choose</option>
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-chevron-circle-right"></i>
                            Submit & Finish</button>
                        <a href="<?= base_url() ?>dashboard/orders/update/5">
                            <button type="button" class="btn btn-primary pull-left">
                                <i class="fa fa-chevron-circle-left"></i>
                                Back To Step1</button>
                        </a>
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
<script src="<?= base_url('public/js/axios/axios.js') ?>"></script>
<script src="<?= base_url('public/js/vue/vue.js') ?>"></script>
<script>
    function getClientById() {
        let client_full_name_el = document.getElementById("client_full_name")
        id = client_full_name_el.value;
        axios.get(`<?= base_url() ?>/api/Users/getClientById/${id}`).then(res => {
            console.log(res)
            document.getElementById("client_phone_number").value = res.data.phone_number;
            document.getElementById("client_email").value = res.data.user_email;
        });
    }

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
                    "length": "",
                    "width": "",
                    "height": "",
                    "price_per_square_meter": "",
                    "square_meters": "",
                    "total_cost_of_room_finishing": "",
                },

                // Total unit finishing cost
                total_unit_finishing_cost: 0,

                // Other Order data
                Other_Order_data:{
                    "client_order_details":"",
                    "total_unit_finishing_cost":"",
                    "proposed_deadline_for_deleivery":"",
                    "preferred_payment_method":"Cash",
                    "admin_notes":"",
                    "order_details":"",
                    "order_status":"1"
                }
            }
        },
        created() {
            this.get_all_rooms_details_list();
        },
        methods: {
            get_all_rooms_details_list() {
                this.Real_estate_unit_rooms_details_list = JSON.parse(this.Real_estate_unit_rooms_details_list);
                if (this.Real_estate_unit_rooms_details_list.length > 0) {
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
                }
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
                for (let index = 0; index < array.length; index++) {
                    const element = array[index];
                    this.all_rooms_details_list[index].square_meters = element.length * element.width * element.height;

                    this.all_rooms_details_list[index].total_cost_of_room_finishing = this.all_rooms_details_list[index].square_meters * this.all_rooms_details_list[index].price_per_square_meter;

                    this.total_unit_finishing_cost = this.total_unit_finishing_cost + this.all_rooms_details_list[index].total_cost_of_room_finishing;
                }
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
                for (let index = 0; index < Real_estate_unit_rooms_data.length; index++) {
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
    });
</script>
<?= $this->endSection() ?>