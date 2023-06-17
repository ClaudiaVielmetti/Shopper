<?php
class Admin extends Controller
{
    public function index()
    {
        $user = $this->load_model('User');
        $user_data = $user->check_login(true, ["admin"]);

        if(is_object($user_data))
        {
            $data['user_data'] = $user_data;
        }


        $data['page_title'] = "Admin"; // set the page title
        $this->view("admin/index", $data); // call the view method


    }


    public function categories()
	{
		
		$User = $this->load_model('User');
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();
		$categories_all = $DB->read("select * from categories order by id desc");
 		$categories = $DB->read("select * from categories where disabled = 0 order by id desc");

		$category = $this->load_model("Category");
		$tbl_rows = $category->make_table($categories_all);
		$data['tbl_rows'] = $tbl_rows;
		$data['categories'] = $categories;
	 
		$data['page_title'] = "Admin - Categories";
		$data['current_page'] = "categories";
		$this->view("admin/categories",$data);
	}

	public function products()
	{
		
		$User = $this->load_model('User');
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();
		$products = $DB->read("select * from products order by id desc");

 		$categories = $DB->read("select * from categories where disabled = 0 order by id desc");

		$products = $this->load_model("Product");
		$category = $this->load_model("Category");
		
		$tbl_rows = $products->make_table($products,$category);
		$data['tbl_rows'] = $tbl_rows;
		$data['categories'] = $categories;
	 
		$data['page_title'] = "Admin - Products";
		$data['current_page'] = "products";
		$this->view("admin/products",$data);
	}
}


