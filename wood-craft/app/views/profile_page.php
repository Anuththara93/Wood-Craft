<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../public/assests/css/profile_page.css">

  <title>Home/ My Profile | Wood Craft</title>
</head>

<body>
    <main id="main" class="main">

          <div class="pagetitle">
              <h1>My Profile</h1>
              <nav class="breadcrumb-container">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Users</li>
                  <li class="breadcrumb-item active">Profile</li>
                </ol>
              </nav>
          </div>

          <div class="card">
            <div class="profile-container">
                <!-- image -->
              <img src="image/profile-img.png" alt="Profile" class="rounded-circle">
              <h2><?php echo $userData['name']; ?></h2>
            </div>
          
            <div class="tab-container">
                <div class="tab-header">
                    <div class="tab-title index" data-tab="profile-overview" onclick="showTab('profile-overview')">Overview</div>
                    <div class="tab-title" data-tab="profile-edit" onclick="showTab('profile-edit')">Edit Profile</div>
                    <!-- <div class="tab-title" data-tab="profile-change-password" onclick="showTab('profile-change-password')">Change Password</div> -->
                </div>

                <div class="tab-content">
                    <div id="profile-overview" class="tab-pane active">

                        <h5>Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Full Name</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['name']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['email']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Contact Number</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['contact_number']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['address']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">City</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['city']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">State/ Province</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['state_province']; ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Zip Code</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['zip_code']; ?></div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-lg-3 col-md-4 label">Country</div>
                            <div class="col-lg-9 col-md-8"><?php echo $userData['country']; ?></div>
                        </div> -->
              
                    </div>

                    <div id="profile-edit" class="tab-pane">

                        <h5>Change Your Details Here</h5>

                        <form>
                            <!-- image -->
                          <div class="row mb-3">
                            <label for="profilePicture" class="col-md-4 col-lg-3 col-form-label">Profile Picture</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="profilePicture" type="file" class="form-control" id="profilePicture">
                            </div>
                          </div>
                          
                            <div class="row mb-3">
                              <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                              <div class="col-md-8 col-lg-9">
                                <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                              </div>
                            </div>

                            <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div>

                              <!-- <div class="row mb-3">
                                <label for="<?php echo $fieldName; ?>" class="col-md-4 col-lg-3 col-form-label"><?php echo $fieldLabel; ?></label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="<?php echo $fieldName; ?>" type="text" class="form-control" id="<?php echo $fieldName; ?>" value="<?php echo $userData[$fieldName]; ?>">
                                </div>
                              </div> -->

                              <div class="text-right mt-3">
                                <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
                                <button type="button" class="btn btn-default">Cancel</button>
                              </div>                          

                          </form>
                    </div>
                    
                    <!-- <div id="profile-change-password" class="tab-pane"> </div> -->
                </div>
            </div>
          </div>

    </main>

    <script src="../public/assests/js/profile_page.js"></script>

</body>
</html>
