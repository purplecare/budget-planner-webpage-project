# csi3140

## Project Outline

### Student Information

| Name       | Student Number | Student E-mail    |
|------------|----------------|-------------------|
| Simon Fu   | 8265708        | sfu013@uottawa.ca |
| Trevor Siu | 7866981        | tsiu086@uottawa.ca|


### Project Description
This is a project for the course CSI3140 where we will be building a Web Application incorporation various languages and frameworks covered in the course material. This project will be tracked using Git/GitHub, and all content relating to the project will be available in this repository.

### Topic and Goal
We will be building a **Personal Budget Web Application** that will allow users to effortlessly manage and track your budgeting goals. Users will be presented with features such as logging their spending activity, setting budget goals, and many more. The inspiration for this product comes from living as students who wants to achieve a frugal lifestyle; this application can still target all types of users.

### Proposed Features (Subject to Change)
1. User login with password and username
2. Set a saving target (monthly/yearly)
3. Keep track of saving target with graphs (monthly trend of spending or saving)
4. Compare budget of different months
5. Categorise different expense
6. Easy setup for subscription service fee(monthly fee)
7. Compare budget and actual to see performance of the  budget
8. Show you how much budget is left for the month for each category
9. Keeping track of multiple source of money(cash, debit card, credit card)
10. Credit card auto payment setting. Able to setup you monthly due date of credit card payment and automatically add the expense to the corresponding budget month
11. Keeping track of you credit card limit
12. General summary of how good are you at budgeting by looking at the difference between budget and actual spending. And give suggestion if the difference is too large.

### Expected Technologies (Subject to Change)
1. HTML
2. CSS
3. Javascript
4. Database (TBD)
5. RESTful API (JSON HTTP)

## UI Design Document

### Color Palette
Our [color palette](css/style.css) is made up of three main colors, being a main darker shade of green (rgb(247, 246, 243)), a sub-lighter shade of green (rgb(230, 255, 247)), and white. When choosing a theme, we want to minimize the amount of colors as well as conflicting colors. This is why we decided to stay with different shades of the same color for our theme. Having an abundance of white background that contains the majority of the text information allows for a more balanced color palette and better readability, followed by the traces of green throughout the pages that would define our application.

### Fonts, Type Scale, Icons, and Form Elements
For our font choices, we decided to choose fonts that are easy to read. In CSS, we are able to set priority as to which fonts we want, and also specify a more compatible backup fonts. Fonts that are easy to read eliminates any unnecessary strokes from a character and also makes for a more minimalistic look.
We decided to use Font Awesome as our choice for Icons. Font Awesome is a very popular css toolkit that allows us to create specific icons with ease. Using a standardized tool like Font Awesome is preferred over creating custom icons due to the fact that users will be able to easily recognize the potential meaning of an Icon. For example, people often associate a caret right icon with being clickable, and would invoke a dropdown or expanding of some sort to appear. We try to be as consistent as we can with our choices.
Type Scale decisions were made to bring focus to various sections as titles and headers are given larger font sizes to easier catch the eye and indicate its purpose.
Form Elements are enlarged and styled more than its default appearance to allow users to have a better visual of the fields and any relevant information.

### General UI Components Strategy
Our strategy is to create a style that is very minimalistic/easy to look at. We want to follow web standards and techniques that will overall improve the User Experience/Interface

## Installation and Deployment Instructions
1. You need to change you apache server document root to the location you store our project.
   go to the httpd.conf
2. Start the apache server
3. Start mysql server and load schema(instruction below)
4. Start you browser and go to localhost/connect.php
### Database Setup
Visit the MySQL website to [download](https://dev.mysql.com/downloads/mysql/) the latest community version. Follow the instructions to install the database.

Configure your localhost server under the username root, and leave the password blank.

If necessary, install the MySQL Workbench [here](https://dev.mysql.com/downloads/workbench/).

Initial setup of a schema/table may be necessary
In you mysql server create a schema/database called budgetapp.
And the load this schema [sampledb.sql](sampledb.sql) in budgetapp.
### Deployment
Please ensure that you are connected to the internet before your initial loading of the page, in order to fetch CDN data and have it stored into your local browser.
