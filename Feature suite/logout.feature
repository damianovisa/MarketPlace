Feature: Logout

    As a user or seller, I want to log off
    from my session to not let anyone have access 
    to my account or to login to a different account,
    so I must click on the logout button

Scenario:

    Given I am logged in
    And I click on the logout button
    Then my session will end
    And I will be logged off of my account