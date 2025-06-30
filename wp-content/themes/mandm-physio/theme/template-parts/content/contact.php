<div id="contact" class="scroll-mt-30 grid grid-cols-1 justify-items-center items-center gap-20">
    <div class="bg-[#EEEEEE] h-0.5 w-full"></div>
    <div class="grid grid-cols-1 gap-10 max-w-[700px] w-full mx-auto">
        <div class="grid grid-cols-1 text-3xl font-[700] text-center">
            <div>
                <h1 class="text-[#000000]">
                    <?php esc_html_e('Contact Us', 'mandm-physio'); ?>
                </h1>
            </div>
            <div>
                <h1 class="text-[#999999]">
                    <?php esc_html_e('We\'re here to help', 'mandm-physio'); ?>
                </h1>
            </div>
        </div>

        <div class="">
            <style>
                form[aria-label="Contact form"] input[type='text'],
                form[aria-label="Contact form"] input[type='email'],
                form[aria-label="Contact form"] textarea {
                    background-color: #eeeeee;
                    color: #999999;
                    margin-top: 0.5rem;
                    padding: 0.5rem;
                    border-radius: 0.5rem;
                    width: 100%;
                }

                form[aria-label="Contact form"] input[type='submit'] {
                    background-color: #000000;
                    color: #ffffff;
                    margin-top: 1rem;
                    padding: 0.5rem 1rem;
                    border-radius: 0.5rem;
                    cursor: pointer;
                    width: 100%;
                }

                form[aria-label="Contact form"] label {
                    color: #999999;
                }

                form[aria-label="Contact form"] p {
                    margin-top: 1rem;
                }
            </style>
            <?php echo do_shortcode('[contact-form-7 id="833da3b" title="Main"]'); ?>
        </div>

    </div>
</div>