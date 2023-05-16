Feature: Remove products

    As a seller I want to be able to 
    remove products that I have previously 
    posted, so that they are not available
    to users anymore

Scenario: 

    Given I am logged in as a seller
    And I have at least 1 product added in my list of products
    When I view my products
    And I click the remove button
    Then the product will be removed and not available to users