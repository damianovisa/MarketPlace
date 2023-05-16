Feature: Seller register

    As a seller I want to be able to
    login to the web application 
    to interact and sell products, but I must create
    an account first if it does not exist

Scenario: 

    Given I am on the register page for sellers
    And I enter all the needed information on the page
    When I click register
    Then an account will be created with the credentials entered