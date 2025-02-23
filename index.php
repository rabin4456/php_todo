<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EB Pearls project</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="nav_bar">
      <img src="assets/images/logo.svg" class="logoImg" height="49" width="40" />
      <nav class="navitem">
        <div class="navlist">Products</div>
        <div class="navlist">Solutions</div>
        <div class="navlist">Help center</div>
        <div class="navlist">Get Started</div>
      </nav>
      <div class="logIn">
        <button type="button" class="loginBtn">login</button>
        <button class="Request_btn">Request a demo</button>
      </div>
    </div>
    <div class="mobile_nav_bar">
      <img src="assets/images/logo.svg" class="logoImg" height="49" width="40" />
      <nav class="navitem">
        <div class="close_btn" id="close_btn">X</div>
        <div class="navlist">Products</div>
        <div class="navlist">Solutions</div>
        <div class="navlist">Help center</div>
        <div class="navlist">Get Started</div>
      </nav>

      <div class="menuIcon_container" id="menuIcon_container">
        <img src="assets/images/menu.png" class="menuIcon" />
      </div>
    </div>
    <div>
      <div class="mobile_logIn">
        <button type="button" class="loginBtn">login</button>
        <button class="Request_btn">Request a demo</button>
      </div>
    </div>

    <div class="cta">
      <div class="cta_container">
        <h1 class="cta_title">Get instant cash flow with invoice factoring</h1>
        <p class="cta_des">
          Why wait? Get same day funding and a faster way to access cash flow.
        </p>
        <button class="cts_button">Get started</button>
        <img src="assets/images/Group.svg" alt="Dots" class="dotImg" />
      </div>
      <img src="assets/images/ctaImg.svg" alt="" class="cta_img" />
    </div>

    <div class="content">
      <div>
        <h2 class="content_title">Outsource payment collection</h2>
        <p class="content_des">
          Faster and flexible access to cash flow from one or all your invoices.
        </p>
        <div class="content_itemMaindiv">
          <div class="content_sub">
            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">Access up to $100,000</h5>
                <p class="contern_itemDes">
                  We fund each invoice once approved and collect payment to
                  optimise your cash flow.*
                </p>
              </div>
            </div>

            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">
                  You choose invoices to get paid
                </h5>
                <p class="contern_itemDes">
                  Self-serve online portal available 24/7 or connect from your
                  CRM or invoicing platform
                </p>
              </div>
            </div>

            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">Simple pricing</h5>
                <p class="contern_itemDes">
                  Only pay for what you use, if you don't need us, there are no
                  costs.
                </p>
              </div>
            </div>
          </div>

          <div class="content_sub">
            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">Simple pricing</h5>
                <p class="contern_itemDes">
                  Only pay for what you use, if you don't need us, there are no
                  costs.
                </p>
              </div>
            </div>
            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">Simple pricing</h5>
                <p class="contern_itemDes">
                  Only pay for what you use, if you don't need us, there are no
                  costs.
                </p>
              </div>
            </div>
            <div class="content_item">
              <div class="content_itemImgcontainer">
                <img
                  src="assets/images/Shape.svg"
                  alt="Shape"
                  class="content_ItemImg"
                />
              </div>
              <div class="content_itemBody">
                <h5 class="content_ItemTitle">Simple pricing</h5>
                <p class="contern_itemDes">
                  Only pay for what you use, if you don't need us, there are no
                  costs.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="task_managerContainer">
          <div class="task_heading">
            <h1 class="task_title">Task Manager</h1>
            <p class="task_desc">Your daily to do list</p>
          </div>
          <!-- Test manager -->
          <div class="task_add">
            <div class="task_list">
              <div class="text_listItem">
                <input
                  type="checkbox"
                  id="checkbox"
                  name="addItem"
                  value="additem"
                  class="task_checkbox"
                />
                <p class="text_des">Task itme one</p>
              </div>
              <button class="delete_Btn"><span>X</span>Delete</button>
            </div>
            <div class="task_list">
              <div class="text_listItem">
                <input
                  type="checkbox"
                  id="checkbox"
                  name="addItem"
                  value="additem"
                  class="task_checkbox"
                />
                <p class="text_des">Task itme one</p>
              </div>
              <button class="delete_Btn"><span>X</span>Delete</button>
            </div>

            <div class="text_input">
              <input
                type="text"
                placeholder="Add new task"
                class="text_inputfield"
              />
              <div class="align_start">
                <button class="add_btn">Add Task</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact us -->
        <div class="contact_us">
          <div class="contact_heading">
            <h1 class="contact_title">Contact us</h1>
            <p class="contact_desc">
              Speak with our team to see how we can help your business.
            </p>
          </div>

          <div class="contact_inputs">
            <input
              type="text"
              placeholder="Your name"
              class="contact_input_field"
            />
            <input
              type="text"
              placeholder="Email"
              class="contact_input_field"
            />
            <input
              type="text"
              placeholder="Your bes contact number"
              class="contact_input_field"
            />
            <textarea
              name=""
              id=""
              cols="30"
              rows="10"
              placeholder="Business or company name"
              class="contact_textarea_field"
            ></textarea>
            <div class="align_center">
              <button class="contact_submit_btn">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <section class="fotter">
      <div class="fotter_main">
        <div class="fotter_msg">
          <p>
            Curabitur consequat, purus a scelerisque sagittis, nulla metus
            tincidunt elit, vel venenatis nulla libero nec nulla. Suspendisse
            potenti. Aenean a justo vel sapien pellentesque tincidunt. Sed
            luctus, elit ac interdum convallis, ligula libero egestas orci, at
            auctor felis ligula nec odio.
          </p>
          <div class="social">
            <img
              src="assets/images/linkedin.svg"
              alt="link In"
              height="24"
              width="24"
            />
            <img src="assets/images/email.png" alt="email" height="24" width="24" />
          </div>
        </div>
        <div class="fotter_list">
          <div class="fotter_items">
            <h6 class="fotter_title">Products</h6>
            <p class="fottersub_list">Payments</p>
            <p class="fottersub_list">Invoice Factoring</p>
            <p class="fottersub_list">Invoice finance</p>
            <p class="fottersub_list">Supplier finance</p>
            <p class="fottersub_list">Customer finance</p>
          </div>

          <div class="fotter_items">
            <div class="fotter_items">
              <h6 class="fotter_title">Company</h6>
              <p class="fottersub_list">About us</p>
              <p class="fottersub_list">Contact us</p>
            </div>
          </div>

          <div class="fotter_items">
            <div class="fotter_items">
              <h6 class="fotter_title">Resources</h6>
              <p class="fottersub_list">Frequently asked questions</p>
              <p class="fottersub_list">Knowledge base</p>
              <p class="fottersub_list">API documentation</p>
            </div>
          </div>
        </div>
      </div>
      <div class="privacy_bar">
        <div class="privacy_item">
          <div class="privacy_list">
            <p class="privacy_text">Privacy policy</p>
            <p class="privacy_text">Contact us</p>
          </div>
          <div class="privacy_lists">
            <p class="privacy_text">Site map</p>
            <p class="privacy_text">@ebpearls</p>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/js/index.js"></script>
  </body>
</html>
