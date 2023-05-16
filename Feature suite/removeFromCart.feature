Feature: Remove from cart

    As a user I want to be able to
    remove items from my cart that I 
    do not want to purchase anymore

Scenario:
    
    Given I am logged in as a user
    And I have a product in my cart already
    When I click the remove button
    Then the product will be removed from my cart