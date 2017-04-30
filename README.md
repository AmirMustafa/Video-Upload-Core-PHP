# Video-Upload-Core-PHP

This project helps you upload Videos with the help of Core PHP.You can upload any videos. Video will be saved in the videos folder. Video name, description, tags will be saved in the database. This is mostly used in projects dealing with videos developed in PHP.

## Installation

1. Clone or Download the repository and keep it in server or local server(like XAMPP).

2. For this we are using MySQLi, sql file is present in the root directory

3. Create a Database and import the video.sql table present in the repository.

4. Configure the database connection in index.php

```
$conn = mysqli_connect("server_details", "username", "password", "database_name");  //connection with database

Eg. 

$conn = mysqli_connect("localhost", "root", "123456", "video_upload");  //connection with database

```

6. Execute index.php file through server or local server

  
## Preview


![Screenshot of Video Upload ](https://cloud.githubusercontent.com/assets/15896579/25562197/9a3bc1ba-2d9c-11e7-9856-1f773fe52164.png?raw=true "Screenshot of Video Upload")
<br/><br/><br/>

![Screenshot of Video Upload ](https://cloud.githubusercontent.com/assets/15896579/25562194/9a391b9a-2d9c-11e7-8fa9-f9c0b8ee552a.png?raw=true "Screenshot of Video Upload")
<br/><br/><br/>

![Screenshot of Video Upload ](https://cloud.githubusercontent.com/assets/15896579/25562195/9a399214-2d9c-11e7-915a-802cb9667ba9.png?raw=true "Screenshot of Video Upload")
<br/><br/><br/>

![Screenshot of Video Upload ](https://cloud.githubusercontent.com/assets/15896579/25562196/9a3ab66c-2d9c-11e7-9b47-c416e3ce2471.png?raw=true "Screenshot of Video Upload")
<br/><br/><br/>

![Screenshot of Video Upload ](https://cloud.githubusercontent.com/assets/15896579/25562193/9a38e4a4-2d9c-11e7-8b3a-1cdd6f4fbb6d.png?raw=true "Screenshot of Video Upload")
<br/><br/><br/>

<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

