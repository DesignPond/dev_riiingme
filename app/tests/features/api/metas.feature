Feature: Labels

  Scenario: Returning a collection of metas
    When I request "GET /v1/metas?riiinglink_id=1"
    Then I get a "200" response
    And scope into the first "data" property
    And the properties exist:
        """
        id
        label
        type
        user_id
        riiinglink
        groupe
        """
    And the "id" property is an integer

  Scenario: Create a new meta
    When I request "POST /v1/metas?riiinglink_id=3&label_id=10"
    Then I get a "200" response
    And scope into the "data" property
    And the properties exist:
        """
        id
        label
        type
        user_id
        riiinglink
        groupe
        """
    And the "id" property is an integer

  Scenario: Create a new meta with wrong args
    When I request "POST /v1/metas?user_id=3"
    Then I get a "400" response

  Scenario: Listing all metas is not possible
    When I request "GET /v1/metas"
    Then I get a "400" response

  Scenario: Update a meta is not possible
    When I request "PUT /v1/metas/1?riiinglink_id=1"
    Then I get a "401" response

  Scenario: Searching non existent meta
    When I request "GET /v1/metas/0"
    Then I get a "200" response
    And the "data" property contains 0 items

  Scenario: Destroy a non existent meta
    When I request "DELETE /v1/metas/0"
    Then I get a "404" response