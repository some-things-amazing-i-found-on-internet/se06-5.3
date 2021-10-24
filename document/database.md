# Convert dữ liệu từ Json sang Mysql:
## Crawl dữ liệu:
- Dữ liệu được crawl từ **https://shopeefood.vn/** thông qua API và thu được dưới dạng file **json**.
- Các files json thu được: **category_groups.json**, **dishes.json**, **restaurants.json**.
---
## Xử lý dữ liệu:

- Các files json được đọc vào python và xử lý bằng các thư viện như **pandas**, **numpy**,.... 
- Ban đầu, mỗi file json sẽ được đọc vào một **dataframe** riêng biệt. Các cột nào mà có phần tử ở dạng danh sách sẽ được tách riêng ra một dataframe mới.
- Loại bỏ các cột chứa nhiều giá trị null.
- Loại bỏ các hàng trùng lặp.
- Sau tất cả, thu được các dataframes và export các dataframes đó ra từng file **csv** tương ứng. Import các files csv vào hệ quản trị dữ liệu mysql và các dữ liệu đã sẵn sàng để được sử dụng.
---
## Tổng quan về dữ liệu thu được:
**1. category_groups.json:**
- category_groups table:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/category_groups.png)
**Mô tả**: bảng này gồm 9 trường, chứa dữ liệu về các thể loại, phân nhóm thức ăn như: đồ uống, tráng miệng, ăn chay, lẩu, đồ ăn tinh bột,...

**2. dishes.json:**
- dish_orders table:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/dish_orderes.png)
**Mô tả**: bảng này gồm 17 trường, chứa dữ liệu về các đơn đặt hàng với các miêu tả như: tên món, số lượng, đơn giá, ảnh minh họa,...

- dish_types table:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/dish_types.png)
**Mô tả**: bảng này gồm 4 trường, chứa dữ liệu miêu tả về các đơn hàng ở bảng **dish_orders** như: thể loại của đơn hàng, mã nhà hàng tương ứng với mỗi đơn hàng,...
+ **Sơ đồ biểu diễn mối quan hệ của dishes:**
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/dishes_relation.png)

**3. restaurants.json:**

- restaurants table:

![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/restaurants.png)

**Mô tả**: bảng này gồm 39 trường, chứa các dữ liệu về các đơn hàng với các miêu tả như: mã đơn hàng, tên món, đơn giá, ảnh minh họa, địa điểm,...

- phones:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/phones.png)
**Mô tả**: bảng này gồm 2 trường chứa dữ liệu các số điện thoại của các đơn hàng.

- operating:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/operating.png)
**Mô tả**: bảng này gồm 10 trường chứa các dữ liệu mô tả về nhà hàng như: thời gian mở và đóng cửa, trạng thái hoạt động,...

- restaurant_photos:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/restaurant_photos.png)
**Mô tả**: bảng này gồm 4 trường, chứa dữ liệu các hình ảnh của các món ăn trong các đơn đặt hàng.

+ **Sơ đồ biểu diễn mối quan hệ của restaurants:**
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/rest.png)
+ **Truy vấn liên kết các bảng trong restaurants:**
```sql
SELECT *
FROM restaurants
JOIN operating ON restaurants._id = operating._id
JOIN restaurant_photos ON restaurants._id = restaurant_photos._id
JOIN phones ON restaurants._id = phones._id
```
- **Result**:
![](https://raw.githubusercontent.com/phamtrunghieu131/Bartender/main/query_result.png)