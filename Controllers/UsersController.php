<?php
namespace Ney\Lagger\Controllers;

/**
 *
 */
class UsersController
{

    /**
     * @SWG\Post(
     *     tags={"user"},
     *     path="/users",
     *     operationId="addUser",
     *     description="Creates a new user",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *         name="user",
     *         in="body",
     *         description="User to created",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/User"),
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="pet response",
     *         @SWG\Schema(ref="#/definitions/User")
     *     ),
     *     @SWG\Response(
     *         response="default",
     *         description="unexpected error",
     *         @SWG\Schema(ref="#/definitions/Responses.FailureResponse")
     *     )
     * )
     */
     public function users()
     {
        return response()->json([
          'id' => 1,
          'name' => 'test',
        ], 200);
     }
}
