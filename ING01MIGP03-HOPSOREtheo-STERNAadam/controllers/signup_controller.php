<?php 
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    
                    case 'password':
                        ?>
                            <div class="alert">
                                <strong>Error</strong> the two passwords must be identical
                            </div>
                        <?php
                    break;

                    case 'email':
                        ?>
                            <div class="alert">
                                <strong>Error</strong> email must be valid
                            </div>
                        <?php
                    break;

                    case 'email_length':
                        ?>
                            <div class="alert">
                                <strong>Error</strong> email must be shorter
                            </div>
                        <?php
                    break;

                    case 'pseudo_lenght':
                        ?>
                            <div class="alert">
                                <strong>Error</strong> username must be shorter
                            </div>
                        <?php
                    break;

                    case 'already':
                        ?>
                            <div class="alert">
                                <strong>Error</strong> account already exist
                            </div>
                        <?php
                    break;
                }
            }
