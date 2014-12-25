Feature: Labels

  Scenario: Returning a collection of places
    When I request "GET /v1/labels"
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

  Scenario: Finding a specific place
    When I request "GET /v1/places/1"
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

