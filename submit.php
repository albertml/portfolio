<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Collect form data
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $message = $_POST["message"];

                            // Set your email address
                            $to = "gaudicos61@gmail.com";

                            // Set email subject
                            $subject = "New Contact Form Submission";

                            // Build the email message
                            $messageBody = "Name: $name\n";
                            $messageBody .= "Email: $email\n\n";
                            $messageBody .= "Message:\n$message";

                            // Send email
                            mail($to, $subject, $messageBody);

                            // Optionally, redirect the user to a thank you page
                            header("Location: thank-you.html");
                            exit();
                        }
                        ?>