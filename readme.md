<_API test for Group Nine_>


I created a API function with php on Laravel


base URL : https://groupnine-jinsungbest.c9users.io/videos/ 


**Create a video**

* **URL**
  /videos/create

* **Method:**
  `POST`
  
*  **URL Params**
   Required: name=[string], brand=[string], published=[date]

* **Data Params**
  [{"id":1,"name":"Frozen","brand":"Disney","published":"2014-02-11"}]

* **Success Response:**
  * **Code:** 200 <br />
    **Content:** `The New Video Created. Frozen Brand: Disney Published: 2014-02-11`
 
* **Error Response:**
  * **Code:** 401 UNAUTHORIZED <br />


**Updte a video**

* **URL**
  /videos/update

* **Method:**
  `POST`
  
*  **URL Params**
   Required: id=[integer] OR Optional: name=[string], brand=[string], published=[date] 

* **Data Params**
  [{"id":1,"name":"Frozen","brand":"Disney","published":"2014-02-11"}]

* **Success Response:**
  * **Code:** 200 <br />
    **Content:** `New Video Updated`
 
* **Error Response:**
  * **Code:** 401 UNAUTHORIZED <br />
  OR
  * **Code:** 422 UNPROCESSABLE ENTRY <br />
    **Content:** `{ error : "video_id parameter is required" }`
   

**Delete a video**

* **URL**
  /videos/delete

* **Method:**
  `POST`
  
*  **URL Params**
   Required: video_id=[integer]

* **Data Params**
  [{"id":1}]

* **Success Response:**
  * **Code:** 200 <br />
    **Content:** `Video number 1 deleted`
 
* **Error Response:**
  * **Code:** 401 UNAUTHORIZED <br />
  OR
  * **Code:** 422 UNPROCESSABLE ENTRY <br />
    **Content:** `{ error : "video_id parameter is required" }`
    

**Track a video view**

* **URL**
  /videos/views

* **Method:**
  `POST`
  
*  **URL Params**
   Required: video_id=[integer] 

* **Data Params**
  [{"id":1}]

* **Success Response:**
  * **Code:** 200 <br />
    **Content:** ` Video number 1 has 3 views `
 
* **Error Response:**
  * **Code:** 401 UNAUTHORIZED <br />
  OR
  * **Code:** 422 UNPROCESSABLE ENTRY <br />
    **Content:** `{ error : "video_id parameter is required" }`
    

**Get a report of video view**

* **URL**
  /videos/viewsReport

* **Method:**
  `POST`
  
*  **URL Params**
   Required: video_id=[integer] OR Optional: date=[date]

* **Data Params**
  [{"id":1,"date":"2001-01-02"}]

* **Success Response:**
  * **Code:** 200 <br />
    **Content:** `Video number 1 has 3 views since 2001-01-02
        Name-> Frozen
        Brand-> Disney
        Published-> 2014-02-11`

* **Error Response:**
  * **Code:** 401 UNAUTHORIZED <br />
  OR
  * **Code:** 422 UNPROCESSABLE ENTRY <br />
    **Content:** `{ error : "video_id and date parameters are required" }`
    

