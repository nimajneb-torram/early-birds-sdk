Feature: Identifying users
    In order to be avised
    As a customer
    I need to be able to be identified into Early Birds data center

    Scenario: Identifying anonymous user
        Given an anonymous user
        When I identify the profile
        Then the user profile become an identified profile

    Scenario: Identifying a known anonymous user
        Given a known anonymous user on datasource id "xxx" with original id "yyyy"
        When I identify the profile
        Then the user profile become an identified profile

    Scenario: Identifying a nominative user
        Given a nominative user profile with id "xxx"
        When I identify the profile
        Then the user profile become an identified profile