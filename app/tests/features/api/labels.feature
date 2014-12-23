Feature: Labels

  Scenario: Get all labels for a given user
    When I request "GET /v1/labels/1"
    Then I get a "200" response
    And scope into the "data" proprety
      And the propreties exists:

        """
        id
        label
        type
        groupe
        """

      And the "id" property is an integer 