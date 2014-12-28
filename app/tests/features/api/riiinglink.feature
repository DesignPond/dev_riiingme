Feature: Riiinglink

  Scenario: Returning a collection of riiinglinks for current user
    When I request "GET /v1/riiinglinks"
    Then I get a "200" response
    And scope into the first "data" property
    And the properties exist:
        """
        id
        invited_id
        """
    And the "id" property is an integer

  Scenario: Create a new riiinglink with wrong args
    When I request "POST /v1/riiinglinks?user_id=3"
    Then I get a "400" response

  Scenario: Update a riiinglink is not possible
    When I request "PUT /v1/riiinglinks/1?user_id=1"
    Then I get a "401" response

  Scenario: Searching non existent riiinglink
    When I request "GET /v1/riiinglinks/0"
    Then I get a "200" response
    And the "data" property contains 0 items

  Scenario: Destroy a non existent riiinglink
    When I request "DELETE /v1/riiinglinks/0"
    Then I get a "404" response