Tổng quan về framework Laravel, đặc điểm, lợi ích, phiên bản,..
Cách khởi tạo 1 project mới
Cách tạo ra một page nội dung
Cách điều hướng liên kết (routing)
Cách tích hợp giao diện web(view)
Cách tích hợp cơ sở dữ liệu 
Cách khai thác session – cookie
Cách xử lý và truyền tải dữ liệu, tập tin


Xây dựng 1 trang web php với 3 nhóm demo
Demo hiển thị và tìm kiếm cho 1 danh sách lớp học theo môn học
Demo quản lý thêm/ xóa/cập nhật thông tin học viên môn học và đăng kí môn học
Demo login logout 
Upload project lên free php host, có free domain chứa mã nhóm 

Báo cáo tìm hiểu về các nội dung tìm hiểu
Slide trình bày và video trình bày
Source php demo
Script csdl
Thông tin hosting demo (tài khoản login host,..)
In báo cáo và nộp trong buổi thi cuối kì (khoảng 30/10)


I. TỔNG QUAN

1.1 Giới thiệu chung về Laravel

Laravel là một framework phát triển ứng dụng web mã nguồn mở được viết bằng PHP. Năm 2011, Taylor Otwell (cha đẻ của framework Laravel) ra mắt framework lần đầu. Đến thời điểm hiện tại Framework Laravel là một trong những framework phát triển ứng dụng web phổ biến và hiệu quả nhất trên thế giới.

LARAVEL được viết bằng ngôn ngữ lập trình PHP (Hypertext Preprocessor) xây dựng với mục tiêu giúp các nhà phát triển tạo ra các trang web hoặc ứng dụng web một cách hiệu quả và có cấu trúc. Framework Laravel cung cấp một nền tảng cố định và chuẩn mực cho việc phát triển ứng dụng web chẳng hạn như quản lý cơ sở dữ liệu, xử lý HTTP requests, quản lý phiên làm việc của người dùng, và nhiều chức năng khác. Framework Laravel cũng cung cấp các thư viện và gói mở rộng sẵn sàng để sử dụng, giúp tiết kiệm thời gian và tăng cường tính ổn định của ứng dụng

Các chức năng của LARAVEL được thực hiện thông qua sự kết hợp của trình điều khiển và hệ thống gói. 
Đặc biệt tốt trong việc tự động hóa các tác vụ lặp đi lặp lại bằng cách cung cấp các công cụ và thư viện tiện ích. Trong ngữ cảnh của framework, chương trình LARAVEL có thể được viết và quản lý như một gói phần mềm, có khả năng mở rộng và tái sử dụng từ thư viện cho đến các ứng dụng web cụ thể.


Ví dụ: Lập trình viên có thể tạo nút khởi động để bắt đầu quá trình thực hiện một ứng dụng. Sau khi được kích hoạt, LARAVEL sẽ thực hiện các lệnh được xác định trong chương trình và dịch chúng sang mã PHP để thực thi trên máy chủ web. Điều này giúp ứng dụng web hoạt động theo cách được mong muốn mà không cần phải thao tác thủ công nhiều.



1.2 Đặc điểm chính

Cốt lõi của framework Laravel là đơn giản hóa quá trình lập trình mà không làm giảm đi tính năng của sản phẩm. "Logic" ở đây đề cập đến việc các lập trình viên có khả năng tạo mã theo các bước logic một cách dễ dàng và hiệu quả. Laravel chủ yếu hỗ trợ các lập trình viên bằng cách cung cấp một phương pháp lập trình logic thuận tiện, cho phép họ viết mã một cách tự nhiên và tiện lợi.

Laravel framework cũng tuân theo một số điều kiện nhất định để có thể tạo mã ứng dụng như mọi framework khác. Các tính năng chính bao gồm:
Bộ điều khiển chính (Main Controller): Được sử dụng để quản lý luồng điều hướng của ứng dụng và điều khiển các tác vụ chính.
Bộ điều khiển tiềm ẩn (Implicit Controller): Là một công cụ giúp quản lý và điều hướng các tác vụ một cách tự động dựa trên các quy tắc và chuẩn mực đã được định sẵn.
Bộ điều khiển tài nguyên (Resource Controller): Được sử dụng để quản lý các tài nguyên như dữ liệu từ cơ sở dữ liệu và cung cấp các phương thức và hoạt động tiêu chuẩn để thao tác với chúng.
Bộ điều khiển phụ thuộc (Dependent Controller): Hỗ trợ xử lý các tác vụ phụ thuộc vào tình huống cụ thể hoặc dữ liệu được truyền vào.
Dịch vụ định tuyến (Routing Service): Cung cấp cơ chế quản lý và định tuyến các yêu cầu từ người dùng đến các bộ điều khiển và hành động tương ứng.

1.3 Lợi ích

Mỗi framework đều có sức hấp dẫn riêng và Laravel không phải là ngoại lệ. Sự khác biệt chính giữa Laravel và PHP core (PHP thuần) là PHP core thường được sử dụng để tạo các trang web động, trong khi Laravel đòi hỏi các kỹ năng viết mã cao cấp hơn.

Trong PHP core, chúng ta tạo các trang web động bằng cách nhúng mã PHP vào trong mã HTML để tạo nội dung động. Điều này hữu ích cho các ứng dụng đơn giản, nhưng nó có thể dẫn đến mã phức tạp và khó quản lý khi ứng dụng phức tạp hơn.

Laravel, một framework xây dựng trên nền PHP, nó áp dụng các mô hình và cấu trúc cố định. Điều này cung cấp nhiều lợi ích, bao gồm tổ chức dự án tốt hơn, quản lý cơ sở dữ liệu thuận tiện hơn, và khả năng phát triển ứng dụng lớn và phức tạp hơn một cách hiệu quả hơn. Lợi ích của framework Lavarel:

1. Cấu trúc xác thực: Laravel cung cấp một cấu trúc xác thực rất đơn giản và mạnh mẽ cho các nhà phát triển. Hầu hết các mã xác thực cần thiết đã được triển khai sẵn trong Laravel. Điều này giúp kiểm soát logic và tài nguyên liên quan đến xác thực một cách hiệu quả.

2. Hỗ trợ hệ thống thư: Laravel cung cấp dịch vụ thư thuận tiện cho các nhà phát triển. Đối với hầu hết các ứng dụng web, sự có mặt của hệ thống thư là quan trọng. Laravel cung cấp một API đơn giản để tương tác với hệ thống thư, cũng như hỗ trợ dịch vụ SMS để người dung có thể dễ dàng liên lạc.

3. Công cụ tích hợp: Laravel tích hợp sẵn nhiều công cụ để giúp phát triển trang web dễ dàng hơn mà không làm mất đi tính năng của ứng dụng. Sử dụng các công cụ như trình điều khiển được lưu trong bộ nhớ đệm tệp và khả năng sử dụng nhiều bộ đệm, Laravel giúp tăng tốc quá trình phát triển ứng dụng.

4. Bảo mật các sự cố kỹ thuật thường gặp: Laravel chú trọng đến bảo mật và hỗ trợ các nhà phát triển trong việc bảo vệ ứng dụng của họ. Framework này đã tích hợp nhiều tính năng để ngăn chặn các lỗ hổng bảo mật phổ biến như SQL Injection, tấn công đòi hỏi chéo trang (Cross-Site Request Forgery - CSRF), và tấn công thao tác giữa các trang (Cross-Site Scripting - XSS). Laravel được xây dựng với mục tiêu cung cấp một môi trường phát triển an toàn.

1.4 Phiên bản
Trong phạm vi báo cáo này, chỉ nêu một số phiên bản Laravel quan trọng và tóm tắt về các cập nhật chính trong mỗi phiên bản. Tuy nhiên Lavarel có nhiều phiên bản con và cập nhật nhỏ khác nhau trong từng phiên bản chính. Chi tiết về từng phiên bản cụ thể và cập nhật của Laravel, trang web chính thức: https://laravel.com/ , hồ sơ Github của Laravel: https://github.com/laravel . Các phiên bản Laravel đã phát hành:

1. Laravel 1 (03/2012):
    Ra mắt phiên bản đầu tiên của Laravel.
    Chức năng cơ bản cho việc xây dựng ứng dụng web.

2. Laravel 2 (11/2012):
    Cải tiến đáng kể so với phiên bản đầu tiên.
    Hỗ trợ Eloquent ORM và Blade templating engine.
    Sử dụng Composer cho quản lý gói phụ thuộc.

3. Laravel 3 (02/2013):
    Giới thiệu bundle system để quản lý các thành phần và gói mở rộng.
    Blade template engine được nâng cấp.
    Hỗ trợ Unit Testing.

4. Laravel 4 (05/2013):
    Eloquent ORM được cải thiện.
    Laravel Artisan commandline tool ra đời.
    Hệ thống quản lý Dependency Injection.

5. Laravel 5 (02/2015):
    Giới thiệu Laravel Elixir cho quản lý tài nguyên và Asset.
    Middleware và Route Middleware.
    Dependency Injection Container được cải thiện.

6. Laravel 6 (09/2019):
    Laravel UI package cho việc quản lý tài nguyên frontend.
    Laravel Vapor cho việc triển khai ứng dụng trên AWS.
    Bản cập nhật dài hạn (LTS) cho phiên bản Laravel 6.

7. Laravel 7 (03/2020):
    Tích hợp Laravel Airlock để xây dựng API.
    Tích hợp Laravel Sanctum cho xác thực API.
    Cải thiện Blade components và Blade UI kit.

8. Laravel 8 (09/2020):
    Jetstream được giới thiệu cho việc xây dựng ứng dụng SaaS và ứng dụng đa người dùng.
    Model factory classes và database seeders được cải thiện.
    Inertia.js được tích hợp.
9. Laravel 9 (02/2022)
    Hỗ trợ cho các thành phần Symfony 6.0, Symfony Mailer, Flysystem 3.0 
    Cải tiến đầu ra của `route: list`
    Driver cơ sở dữ liệu Laravel Scout mới, cú pháp truy xuất/mutator mới trong Eloquent.
10. Laravel 10 (02/2023)
 Thêm tính năng cờ hiệu (Laravel pennat),
 Có thể viện dẫn quy tắc xác thực (invokable validation rules)
 Hỗ trợ cho các khai báo kiểu nguyên thủy (native type declarations) trong PHP

Laravel phiên bản 10.2.6 được phát hành 15/08/2023 hiện là phiên bản làm việc mới nhất.

Trong báo cáo về laravel framework môn lập trình Web2 này, sử dụng phiên bản laravel 10.2.6  


Sử dụng Composer (một trình quản lý gói PHP) để khởi tạo dự án laravel mới. Dưới đây là các bước chi tiết:

**Bước 1: Cài đặt Composer**

Truy cập trang web chính thức của Composer (https://getcomposer.org/) để tải xuống và tiến hành cài đặt. Phiên bản Composer đã được cài đặt thực hiện trong bài báo cáo:  Composer phiên bản 2.6.3

**Bước 2: Cài đặt Laravel**

Cài đặt bằng cách thực hiện thông qua các dòng lệnh, thực hiện lệnh sau với bash:
```
composer create-project --prefer-dist laravel/W2-OSS-01-demo
```
W2-OSS-01-demo là tên dự án được tạo. Khi thực hiện lệnh này Composer sẽ tải xuống và cài đặt Laravel cùng với tất cả các phụ thuộc cần thiết. 

**Bước 3: Cấu hình Môi trường**

Sau khi cài đặt xong, cần thực hiện các bước sau:

- Sao chép file `.env.example` và đổi tên thành `.env`. Điều này chứa các biến môi trường dự án
- Đặt giá trị cho các biến môi trường trong file `.env`. Đặc biệt, bạn cần cấu hình cơ sở dữ liệu của bạn.

**Bước 4: Tạo Key Ứng dụng**

Chạy lệnh sau để tạo một khóa ứng dụng ngẫu nhiên trong file `.env`:

```bash
php artisan key:generate
```

**Bước 5: Chạy Ứng dụng**

Chạy ứng dụng Laravel bằng lệnh:

```bash
php artisan serve
```

Mặc định, ứng dụng sẽ chạy tại địa chỉ `http://localhost:8000`


**Bước 6 (Tùy chọn): Xây dựng ứng dụng**

Bây giờ bạn đã có một dự án Laravel cơ bản, bạn có thể bắt đầu xây dựng ứng dụng bằng cách thêm các route, controller, model, và view mới. Laravel có tài liệu hướng dẫn rất tốt trên trang web chính thức (https://laravel.com/docs) để bạn có thể nắm vững cách sử dụng nó.

Chúc bạn thành công trong việc phát triển dự án Laravel của mình!



Tạo một trang nội dung trong dự án Laravel, các bước như sau:

**Bước 4: Tạo View**

view để hiển thị nội dung trang. 

Tạo một file có tên "page.blade.php" trong thư mục `resources/views` của dự án Laravel và định nghĩa nội dung HTML của trang trong file này.

Nội dung file  page.blade.php
```html
<!DOCTYPE html>
<html>
<head>
    <title>Trang Nội Dung</title>
</head>
<body>
    <h1>Xin chào, đây là trang nội dung!</h1>
    <p>Đây là nội dung của trang bạn muốn hiển thị.</p>
</body>
</html>
```


Bước 1: Tạo Controller 

Tạo một controller mới:


```bash
php artisan make:controller PageController
```

Lệnh trên sẽ tạo ra một file `PageController.php` trong thư mục `app/Http/Controllers`.



**Bước 2: Xây dựng Phương thức Controller**

Mở file `app/Http/Controllers/PageController.php` và thêm một phương thức có tên là "index" để xử lý logic cho trang nội dung: 

```php
public function index()
{
    // Xử lý logic của trang nội dung ở đây
    return view('page'); // Trả về view "page.blade.php"
}
```

Trong phương thức `index` sẽ trả về view có tên page.blade.php 

Bước 3: Tạo Route

Tạo 1 route để xác định URL của trang nội dung: “/page” và liên kết nói với controller “PageController” bằng phương thức index. Mở file `routes/web.php` và thêm route như sau: 

```php
Route::get('/page', 'PageController@index');
```


**Bước 5: Truy cập Trang**

Truy cập trang nội dung vừa tạo : `http://localhost:8000/page`.


Trong Laravel, bạn có thể thiết lập các route (điều hướng) để xác định cách ứng dụng của bạn phản hồi với các URL cụ thể. Dưới đây là cách bạn có thể thực hiện điều hướng liên kết (routing) trong Laravel:

Trong laravel việc thiết lập route(điều hướng) để xác định cách ứng dụng phản hồi với URL cụ thể  đã định. 
Sau đây là các cách thực hiện điều hướng liên kết (routing) trong Laravel: 

Cách 1. Basic Routing (Điều hướng cơ bản):

Định hướng các route cơ bản trong file `routes/web.php` 
-	Route `'/about'` 
-	Route `'/contact'` 
-	định nghĩa các hàm () để xử lý các URL tương ứng.

```php
Route::get('/', function () {
    return 'Trang chủ';
});

Route::get('/about', function () {
    return 'Về chúng tôi';
});

Route::get('/contact', function () {
    return 'Liên hệ';
});
```

Cách 2. Named Routes (Điều hướng có tên):

Laravel cho phép đặt tên các route để dễ dàng tham chiếu đến chúng trong mã và view. 
Ví dụ:

```php
Route::get('/about', function () {
    return 'Về chúng tôi';
})->name('about');

Route::get('/contact', function () {
    return 'Liên hệ';
})->name('contact');
```

Bây giờ bạn có thể sử dụng `route()` trong mã hoặc `route` trong view để truy cập các route có tên.

Cách 3. Route Parameters (Tham số Route):

Đặt tham số trong các route để xử lý các URL có các giá trị động. Ví dụ:

```php
Route::get('/user/{id}', function ($id) {
    return 'Thông tin của người dùng có ID: ' . $id;
});
```

Trong ví dụ này, `{id}` là một tham số động, và giá trị của nó sẽ được truyền vào hàm () như một đối số.

**4. Route Groups (Nhóm Route):**

Bạn có thể gom nhóm các route liên quan lại với nhau trong một nhóm sử dụng `Route::group()`. Điều này giúp quản lý route và áp dụng middleware cho tất cả các route trong nhóm. Ví dụ:

```php
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Trang quản trị';
    });

    Route::get('/settings', function () {
        return 'Cài đặt';
    });
});
```

Trong ví dụ này, chúng ta đã tạo một nhóm route có tiền tố `admin`, vì vậy các URL bắt đầu bằng "/admin" sẽ được ánh xạ vào các route trong nhóm này.

**5. Route Controllers (Điều hướng bằng Controller):**

Thay vì sử dụng hàm closure trong route, bạn có thể điều hướng các URL đến các phương thức của controller. Ví dụ:

```php
Route::get('/profile', 'ProfileController@index');
```

Trong trường hợp này, chúng ta đã điều hướng route `/profile` đến phương thức `index` của controller `ProfileController`.

Đó là một số cách cơ bản để điều hướng liên kết trong Laravel. Laravel cung cấp nhiều tính năng mạnh mẽ khác để quản lý route, như middleware, đặt ràng buộc, và nhiều hơn nữa. Để biết thêm chi tiết, bạn nên tham khảo tài liệu chính thức của Laravel.


