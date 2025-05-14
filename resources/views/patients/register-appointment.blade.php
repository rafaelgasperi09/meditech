<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">




        <!-- Page Wrapper -->
        <div class="">
            <div class="content container-fluid w-75">


                <div class="row">
                    <!-- Lightbox -->
                    <div class="col-lg-6 login-wrap">
                        <div class="login-sec">
                            <div class="log-img">
                                <img class="img-fluid" src="{{ URL::asset('/assets/img/login-02.png') }}"
                                    alt="Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 login-wrap-bg flex items-center justify-center">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Formulario de Registro</h4>
                            </div>
                            <div class="card-body">
                                <div class="wizard">
                                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                        <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Personal Information">
                                            <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center "
                                                href="#step1" id="step1-tab" data-bs-toggle="tab" role="tab"
                                                aria-controls="step1" aria-selected="true">
                                                <i class="far fa-user"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Create an Appoinment">
                                            <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center "
                                                href="#step2" id="step2-tab" data-bs-toggle="tab" role="tab"
                                                aria-controls="step2" aria-selected="false">
                                                <i class="fas fa-map-pin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" role="tabpanel" id="step1"
                                            aria-labelledby="step1-tab">
                                            <div class="mb-4">
                                                <h5>Enter Your Personal Details</h5>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-firstname-input"
                                                                class="form-label">First name<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-firstname-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-lastname-input"
                                                                class="form-label">Last name<span class="login-danger">*</span></label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-lastname-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-phoneno-input"
                                                                class="form-label">Phone<span class="login-danger">*</span></label>
                                                            <input type="tel" class="form-control" id="phone"
                                                                name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-email-input"
                                                                class="form-label">Email<span class="login-danger">*</span></label>
                                                            <input type="email" class="form-control"
                                                                id="basicpill-email-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-password-input"
                                                                class="form-label">Password<span class="login-danger">*</span></label>
                                                            <input type="password" class="form-control"
                                                                id="basicpill-password-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-confirmpassword-input"
                                                                class="form-label">Confirm Password<span class="login-danger">*</span></label>
                                                            <input type="password" class="form-control"
                                                                id="basicpill-confirmpassword-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="d-flex">
                                                <a class="btn btn btn-primary next self-end">Next</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="step2"
                                            aria-labelledby="step2-tab">
                                            <div class="mb-4">
                                                <h5>Datos para programar la cita</h5>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-pancard-input"
                                                                class="form-label">Fecha</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-pancard-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-vatno-input"
                                                                class="form-label">Hora</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-cstno-input"
                                                                class="form-label">Doctor</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-cstno-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-servicetax-input"
                                                                class="form-label">Sucursal</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-block mb-3">
                                                            <label for="basicpill-cstno-input"
                                                                class="form-label">Consultorio</label>
                                                            <input type="text" class="form-control"
                                                                id="basicpill-cstno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="d-flex">
                                                <a class="btn btn btn-primary previous me-2"> Back</a>
                                                <a class="btn btn btn-primary next">Save</a>
                                            </div>
                                        </div>
                                        <!---<div class="tab-pane fade" role="tabpanel" id="step3" aria-labelledby="step3-tab">
                                                <div class="mb-4">
                                                    <h5>Payment Details</h5>
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-block mb-3">
                                                                <label for="basicpill-namecard-input" class="form-label">Name on Card</label>
                                                                <input type="text" class="form-control" id="basicpill-namecard-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="input-block mb-3">
                                                                <label class="form-label">Credit Card Type</label>
                                                                <select class="form-select selectG">
                                                                    <option selected>Select Card Type</option>
                                                                    <option value="AE">American Express</option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                              </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-block mb-3">
                                                                <label for="basicpill-cardno-input" class="form-label">Credit Card Number</label>
                                                                <input type="text" class="form-control" id="basicpill-cardno-input">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="input-block mb-3">
                                                                <label for="basicpill-card-verification-input" class="form-label">Card Verification Number</label>
                                                                <input type="text" class="form-control" id="basicpill-card-verification-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-block mb-3">
                                                                <label for="basicpill-expiration-input" class="form-label">Expiration Date</label>
                                                                <input type="text" class="form-control" id="basicpill-expiration-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="d-flex">
                                                    <a class="btn btn-primary previous me-2">Previous</a>
                                                    <a class="btn btn-primary next" data-bs-toggle="modal" data-bs-target="#save_modal">Save Changes</a>
                                                </div>
                                            </div>--->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="save_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Confirm Save Changes</h3>
                        <p>Are you sure want to Confirm Save Changes?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button type="reset" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-continue-btn">Save Changes</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" data-bs-dismiss="modal"
                                    class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->

    <div class="sidebar-overlay" data-reff=""></div>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Select2 Js -->
    <script src="assets/js/select2.min.js"></script>


    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
<script>
	 $('#myForm').submit(function(event) {
            event.preventDefault();  // Evitamos el envío tradicional del formulario
	 
			            // Recopilamos los datos del formulario

			       $.ajax({
                url: 'api/generate_unblock_code',  // URL donde quieres enviar los datos
                method: 'POST',  // Método HTTP a utilizar
                data: formData,  // Los datos del formulario
                success: function(response) {
                    // Aquí manejamos la respuesta del servidor en caso de éxito

                    $("#loadingModal").modal('hide');

                    if(response.success){
                        iziToast.success({
                            position: 'topRight',
                            message: response.message,
                            timeout: 15000,
                        });
                        $("#patient_id").val('');
                        $("#patient_last_name").val('');
                        $("#patient_date_of_birth").val('');
                    }else{
                        iziToast.error({
                            position: 'topRight',
                            message: response.message,
                            timeout: 15000,
                        });
                    }

                },
                error: function(xhr, status, error) {
                    // Aquí manejamos los errores en la llamada AJAX
                    console.error('Error en la llamada AJAX:', error);
                    console.log(error,xhr,status);
                    $("#loadingModal").modal('hide');
                    iziToast.error({
                        position: 'topRight',
                        message: error,
                        timeout: 15000,
                    });
                }
            });
	 });
</script>
</body>

</html>
