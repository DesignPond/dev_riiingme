Feature: Labels

  Scenario: Returning a collection of places
    When I request "GET /v1/labels/1"
    Then I get a "200" response
    And scope into the first "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Finding a specific label
    When I request "GET /v1/labels/single/1"
    Then I get a "200" response
    And scope into the "data" property
    And the properties exist:
        """
        id
        label
        type
        groupe
        """
    And the "id" property is an integer

  Scenario: Searching non-existent labels
    When I request "GET /v1/labels/single/0"
    Then I get a "200" response
    And the "data" property contains 0 items

 Scenario: Listing all labels is not possible
    When I request "GET /v1/labels"
   Then I get a "400" response