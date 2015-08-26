<?php $user = App\User::get(); ?>
<table>
 <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                
                            </tr>
                        </thead>
                         
                            @foreach($user as $users)
                            <tr>
                                <td>{!! $users->first_name !!}</td>
                                <td>{!! $users->last_name !!}</td>
                                <td>{!! $users->email !!}</td>
                                <td>{!! studly_case($users->authority) !!}</td>
                                
                            </tr>
                           
                    @endforeach
    </table>