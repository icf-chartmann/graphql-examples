<?php

namespace Drupal\graphql_examples\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * The input type for block mutations.
 *
 * @GraphQLInputType(
 *   id = "block_input",
 *   name = "BlockInput",
 *   fields = {
 *     "title" = "String",
 *     "body" = {
 *        "type" = "String",
 *        "nullable" = "TRUE"
 *     }
 *   }
 * )
 */
class BlockInput extends InputTypePluginBase {

}
