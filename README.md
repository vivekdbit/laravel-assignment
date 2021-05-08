
## About Assignment

Create a Laravel project with CRUD operations for customers named bulbshare-customers-task and
publish that on a public Github repository.
For the database structure and data use the MyWind sample database (MySQL version of Northwind).

- For displaying the data use the jQuery plugin DataTables (https://datatables.net/). The table should
display customer properties (id, company, last_name, first_name, email_address, job_title,
business_phone, address, city, zip_postal_code, country_region) and aggregated values of all orders the
    customer made (orders_total) and their total value (orders_total_value).
The user should be able to paginate, sort data by columns and search the rows (on company, last name,
first name, address, city, country_region).

The data table should use server-side processing
(https://datatables.net/examples/data_sources/server_side.html)

- For creating and updating data use a modal dialog which includes the input fields and validation.
The user should be able to add a new row to the customers table and update or delete an existing one.
Required fields: company, last_name and first_name. Optional fields: email_address, job_title,
business_phone, address, city, state_province, zip_postal_code and country_region.

- Send us the publicly available url and the Github repository url.

- (Optional) Make the project publicly available using your own infrastructure or use a free tier of any cloud
based hosting provider (AWS, Azure, GCP, Heroku, Forge, etc).

## Resources

- MyWind sample database: (https://github.com/dalers/mywind)
- DataTable jQuery plugin: (https://datatables.net/)
- Documentation for DataTable server-side processing: (https://datatables.net/examples/data_sources/server_side.html)