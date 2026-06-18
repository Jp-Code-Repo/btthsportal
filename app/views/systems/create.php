<?php
?>

<h2 class="mb-4">Create System</h2>

<div class="card dashboard-card">

    <div class="card-body">

        <form
            method="POST"
            action="/systems/store"
        >

            <div class="row">

                <div class="col-12 mb-3">

                    <label class="form-label">
                        System Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter system name"
                        value="<?= htmlspecialchars((string) old('name')) ?>"
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Department
                    </label>

                    <select
                        name="department_id"
                        class="form-select"
                    >

                        <option selected disabled>
                            Select Department
                        </option>

                        <?php foreach ($departments as $department): ?>

                            <option
                                value="<?= $department['id'] ?>"
                                <?= old('department_id', 0) == $department['id'] ? 'selected' : '' ?>
                            >
                                <?= htmlspecialchars($department['name']) ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select
                        name="status"
                        class="form-select"
                    >

                        <option
                            value="1"
                            <?= old('status', 1) == 1 ? 'selected' : '' ?>
                        >
                            Active
                        </option>

                        <option
                            value="0"
                            <?= old('status', 1) == 0 ? 'selected' : '' ?>
                        >
                            Inactive
                        </option>

                    </select>

                </div>

                <div class="col-12 mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea
                        name="description"
                        class="form-control"
                    ><?= htmlspecialchars((string) old('description')) ?></textarea>

                </div>

                <div class="col-12 mb-4">

                    <label class="form-label">
                        Launch URL
                    </label>

                    <input
                        type="text"
                        name="launch_url"
                        class="form-control"
                        value="<?= htmlspecialchars((string) old('launch_url')) ?>"
                    >

                </div>

            </div>

            <div class="d-flex gap-2">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Save System
                </button>

                <a
                    href="/systems"
                    class="btn btn-outline-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>