<?= $this->extend('dashboard/dashboard-layout') ?>


<?= $this->section('css-styles') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Orders Management
        <small>Update</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url('dashboard') ?>">Orders Management</a></li>
        <li class="active">Update</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row" id="order_vue_app_id">
        <!-- left column -->
        <form role="form" method="post">
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
                                <input readonly type="text" class="form-control" name="client_full_name" id="client_full_name" placeholder="Client Full Name">
                                <label for="client_full_name">Full Name</label>
                                <!-- <input type="text" class="form-control" name="client_full_name" id="client_full_name" placeholder="Enter Full Name"> -->
                                <select v-model="orderData.user_id" onchange="getClientById()" required name="user_id" id="user_id" class="form-control">
                                    <option value="">Choose ...</option>
                                    <?php foreach ($clients_list as $key => $client) { ?>
                                        <option value="<?= $client['user_id'] ?>"><?= $client['full_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_email" class="control-label">Client Email</label>
                                <input v-model="orderData.client_email" readonly type="email" class="form-control" name="client_email" id="client_email" placeholder="Client Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="client_phone_number" class="control-label">Client Phone Number</label>
                                <input v-model="orderData.client_phone_number" readonly type="text" class="form-control" name="client_phone_number" id="client_phone_number" placeholder="Client Phone Number">
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
                                <label for="real_estate_unit_type">Real Estate Unit Type</label>
                                <select v-model="orderData.real_estate_unit_type" required name="real_estate_unit_type" id="real_estate_unit_type" class="form-control">
                                    <option value="">Choose</option>
                                    <option value="Appartment">Appartment</option>
                                    <option value="Villa">Villa</option>
                                    <option value="House">House</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location_latitude">Latitude</label>
                                <input v-model="orderData.location_latitude" type="text" class="form-control" name="location_latitude" id="location_latitude" placeholder="Enter location latitude">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location_longitude">Longitude</label>
                                <input v-model="orderData.location_longitude" type="text" class="form-control" name="location_longitude" id="location_longitude" placeholder="Enter location longitude">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="client_address">Address</label>
                                <textarea v-model="orderData.client_address" required type="text" class="form-control" name="client_address" id="client_address" placeholder="Enter Address"></textarea>
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
                <textarea v-model="orderData.real_estate_unit_rooms_json" type="text" id="real_estate_unit_rooms_json" name="real_estate_unit_rooms_json" class="form-control"></textarea>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Real estate unit rooms</h3>
                        <button type="button" @click="addNewRoomType()" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus-circle"></i> add new</button>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Room Type</th>
                                <th>count</th>
                                <th>#</th>
                            </tr>
                            <tr v-for="(Real_estate_unit_roomItem, itemKey) in Real_estate_unit_rooms_data" :key="itemKey">
                                <td>{{itemKey + 1}}</td>
                                <td>{{Real_estate_unit_roomItem}}
                                    <select @change="getTypeTitle($event,itemKey)" v-model="Real_estate_unit_roomItem.room_type_id" class="form-control" style="width:250px">
                                        <option value="">Choose ...</option>
                                        <option v-for="(RoomsType, index) in RoomsTypes_list" :value="RoomsType.room_type_id" :key="index">{{RoomsType.room_type_title}}</option>
                                    </select>
                                </td>
                                <td>
                                    <input @change="change_count_of_rooms()" v-model="Real_estate_unit_roomItem.count_of_rooms" type="number" class="form-control" style="width: 100px;">
                                </td>
                                <td>
                                    <button @click="deleteA_Room_from_the_Real_estateUnit(itemKey)" type="button" class="btn btn-xs btn-danger"> <i class="fa fa-times-circle"></i> delete</button>

                                </td>
                            </tr>
                            <tr>
                                <td v-if="Real_estate_unit_rooms_data.length < 1" colspan="4">there is no data to display.</td>
                            </tr>
                        </table>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-chevron-circle-right"></i>
                            Step 2
                        </button>
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!--/.col (left) -->

        </form>
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
            document.getElementById("client_phone_number").value = res.data[0].phone_number;
            document.getElementById("client_email").value = res.data[0].user_email;
            document.getElementById("client_full_name").value = res.data[0].full_name;
        });
    }

    const order_vue_app = new Vue({
        el: "#order_vue_app_id",
        data() {
            return {
                orderData: <?= json_encode($orderData) ?>,

                RoomsTypes_list: <?= json_encode($RoomsTypes_list) ?>,
                Real_estate_unit_rooms_data: [],
                Real_estate_unit_rooms_details_list: [],

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
            }
        },
        created() {
            this.getReal_estate_unit_rooms_data();
        },
        methods: {
            getReal_estate_unit_rooms_data(){
                this.Real_estate_unit_rooms_data = JSON.parse(this.orderData.real_estate_unit_rooms_json);
            },
            addNewRoomType: function() {
                // var defaultReal_estate_unit_room_item = Object.create(this.defaultReal_estate_unit_room_item);
                var defaultReal_estate_unit_room_item = Object.assign({}, this.defaultReal_estate_unit_room_item);
                this.Real_estate_unit_rooms_data.push(defaultReal_estate_unit_room_item);
                document.getElementById("real_estate_unit_rooms_json").value = JSON.stringify(this.Real_estate_unit_rooms_data)
            },
            getTypeTitle: function(event,itemKey) {
                var room_type_id = event.target.value;
                var room_type_title = event.target.selectedOptions[0].innerHTML;
                this.Real_estate_unit_rooms_data[itemKey].room_type_title = room_type_title;
                document.getElementById("real_estate_unit_rooms_json").value = JSON.stringify(this.Real_estate_unit_rooms_data)
            },
            change_count_of_rooms: function() {
                document.getElementById("real_estate_unit_rooms_json").value = JSON.stringify(this.Real_estate_unit_rooms_data)
            },
            deleteA_Room_from_the_Real_estateUnit: function(itemKey) {
                this.Real_estate_unit_rooms_data.splice(itemKey,1);
                this.orderData.real_estate_unit_rooms_json = JSON.stringify(this.Real_estate_unit_rooms_data);
                document.getElementById("real_estate_unit_rooms_json").value = JSON.stringify(this.Real_estate_unit_rooms_data)
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