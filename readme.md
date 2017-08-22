<API test for Group Nine>

I created a API function with php on Laravel.

base URL : https://groupnine-jinsungbest.c9users.io/videos/

Title : Create a video 
URL : /videos/create
Method : POST 
URL Params : Required: name=[string], brand=[string], published=[date]
Data Params : [{"id":1,"name":"Frozen","brand":"Disney","published":"2014-02-11"}]
Response Codes: 
Success (200 OK) - The New Video Created. Frozen Brand: Disney Published: 2014-02-11, 
Bad Request (400), Unauthorized (401)

Title : Update a video
URL : /videos/update
Method : POST 
URL Params : Required: id=[integer] OR Optional: name=[string], brand=[string], published=[date]
Data Params : [{"id":1,"name":"Frozen","brand":"Disney","published":"2014-02-11"}]
Response Codes: 
Success (200 OK) - New Video Updated
Bad Request (400), Unauthorized (401)

Title : Delete a video
URL : /videos/delete
Method : POST 
URL Params : Required: video_id=[integer]
Data Params : [{"id":1}]
Response Codes: 
Success (200 OK) - Video number 1 deleted, 
Bad Request (400), Unauthorized (401)

Title : Track a video view
URL : /videos/views
Method : POST 
URL Params : video_id=[integer]
Data Params : [{"id"}]
Response Codes: 
Success (200 OK) - Video number 1 has 3 views, 
Bad Request (400), Unauthorized (401)

Title : Get a report of video view
URL : /videos/viewsReport
Method : POST 
URL Params : Required: video_id=[integer] OR Optional: date=[date]
Data Params : [{"id":1,"date":"2001-01-02"}]
Response Codes: 
Success (200 OK) - Video number 1 has 3 views since 2001-01-02
        Name-> Frozen
        Brand-> Disney
        Published-> 2014-02-11
Bad Request (400), Unauthorized (401)

